<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Forum;
use App\Models\ForumLike;
use App\Models\ViewLog;
use Auth;
use Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Str;

class ForumController extends Controller
{
    public function getPostPage(Forum $post)
    {
        $post = Forum::find($post->id);
        $comments = Comment::where('forum_id', $post->id)->orderBy('created_at', 'desc')->get();

        // View Log
        if (Auth::check()){
            $user = Auth::user();
            $log = ViewLog::where('user_id', $user->id)->where('forum_id', $post->id)->first();
            if ($log != null){
                $user->viewLogs()->detach($post);
            }
            $user->viewLogs()->attach($post, ['created_at' => now()]);
        }
        return view('post-detail', ['post' => $post, 'comments' => $comments, 'filter'=> "Newest"]);
    }

    public function getPostPageCommentFilter(Forum $post, string $filter)
    {
        $post = Forum::find($post->id);
        if(Str::upper($filter) === "NEWEST"){
            $comments = Comment::where('forum_id', $post->id)->orderBy('created_at', 'desc')->get();
        }
        else if(Str::upper($filter) === "OLDEST"){
            $comments = Comment::where('forum_id', $post->id)->orderBy('created_at', 'asc')->get();
        }
        else if(Str::upper($filter) === "MOST POPULAR"){
            $comments = Comment::where('forum_id', $post->id)->withCount('userLikes')->orderBy('user_likes_count', 'desc')->get();
        }
        else if(Str::upper($filter) === "LEAST POPULAR"){
            $comments = Comment::where('forum_id', $post->id)->withCount('userLikes')->orderBy('user_likes_count', 'asc')->get();
        }
        return view('post-detail', ['post' => $post, 'comments' => $comments, 'filter'=>$filter]);
    }

    public function getEditPostPage(Forum $post)
    {
        $post = Forum::find($post->id);
        if (! Gate::allows('admin-access') && $post->user->id != Auth::id()) {
            abort(403);
        }
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        return view('edit-post', ['post' => $post, 'categories' => $categories, 'categoryTypes' => $categoryTypes]);
    }

    public function editPost(Request $request, Forum $post)
    {
        $validated = $request->validate([
            'postTitle' => 'required|min:5|max:50',
            'programmingLanguage' => 'required',
            'postType' => 'required',
            'image' => 'image|nullable',
            'content' => 'required|min:5|max:1000',
        ]);
        $post = Forum::find($post->id);
        $post->title = $validated["postTitle"];
        $post->content = $validated["content"];
        $post->category_id = $validated['programmingLanguage'];
        $post->category_type_id = $validated['postType'];
        if ($request->has('image')){
            $path = Storage::disk('supabase')->put('forum/'.$validated["postTitle"], $request->file('image'));
            $validated['image'] = $path;
            if ($post->image !== null){
                Storage::disk('supabase')->delete($post->image);
            }
            $post->image = $validated['image'];
        }
        $post->save();

        $comments = Comment::where('forum_id', $post->id)->get();
        return redirect()
            ->route('post-detail', ['post' => $post, 'comments' => $comments])
            ->with('success', 'Post has been edited.');
    }

    public function deletePost(Forum $post){
        $post = Forum::find($post->id);
        if (! Gate::allows('admin-access') && $post->user->id != Auth::id()) {
            abort(403);
        }
        if ($post->image !== null){
            Storage::disk('supabase')->delete($post->image);
        }
        $post->delete();
        return redirect()->route('posts')->with('success','Post has been deleted.');
    }

    public function getAllPostPage()
    {
        $posts = Forum::orderby('created_at', 'desc')->paginate(10);

        $logs = collect();
        if (Auth::check()){
            $user = Auth::user();
            $listPosts = ViewLog::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(10)->get('forum_id');
            foreach($listPosts as $postId){
                $post = Forum::find($postId)->first();
                $logs->push($post);
            }
        }
        return view('posts', ['posts' => $posts,'programmingLanguage' => "All", 'postType' => "All", 'sortBy' => "New", 'search' => "", 'logs' => $logs]);
    }

    public function getCreatePostPage()
    {
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        return view('create-post', [
            'categories' => $categories,
            'categoryTypes' => $categoryTypes,
        ]);
    }

    public function createPost(Request $request)
    {
        $validated = $request->validate([
            'postTitle' => 'required|min:5|max:50',
            'programmingLanguage' => 'required',
            'postType' => 'required',
            'image' => 'image|nullable',
            'content' => 'required|min:5|max:1000',
        ]);
        $post = new Forum();
        $post->user_id = Auth::user()->id;
        $post->category_id = $validated['programmingLanguage'];
        $post->category_type_id = $validated['postType'];
        $post->title = $validated['postTitle'];
        $post->content = $validated['content'];
        if ($request->has('image')){
            $path = Storage::disk('supabase')->put('forum/'.$validated["postTitle"], $request->file('image'));
            $validated['image'] = $path;
            $post->image = $validated['image'];
        }
        $post->save();

        // Badges
        $badgeController = new BadgeController();
        $badgeController->addBadge('create_forum');

        $comments = Comment::where('forum_id', $post->id)->get();
        return redirect()
            ->route('post-detail', ['post' => $post, 'comments' => $comments])
            ->with('success', 'Post has been created.');
    }

    public function likePost(string $post_id)
    {
        $post = Forum::find($post_id);
        $user = Auth::user();
        $user->forumLikes()->attach($post);
        $likes = $post->userLikes()->count();

        return response()->json([
            'success' => true,
            'likes' => $likes
        ]);
    }

    public function dislikePost(string $post_id)
    {
        $post = Forum::find($post_id);
        $user = Auth::user();
        $user->forumLikes()->detach($post);
        $likes = $post->userLikes()->count();

        return response()->json([
            'success' => true,
            'likes' => $likes
        ]);
    }

    public function filterPosts(string $programmingLanguage, string $postType, string $sortBy, string $search = ""){

        $posts = Forum::all();

        if (Str::upper($programmingLanguage) !== "ALL"){
            $posts = $posts->filter(function($post) use($programmingLanguage) {
                return $post->category->category_name == $programmingLanguage;
            });
        }

        if (Str::upper($postType) !== "ALL"){
            $posts = $posts->filter(function ($post) use($postType) {
                return $post->categoryType->category_type_name == $postType;
            });
        }

        $ids = [];
        foreach($posts as $post){
            array_push($ids, $post->id);
        }

        if (Str::upper($sortBy) === "NEW"){
            $posts = Forum::whereIn('id', $ids)->orderby('created_at', 'desc')->where('title', 'iLIKE', '%'. $search.'%')->paginate(6);
        }
        else if (Str::upper($sortBy) === "OLD"){
            $posts = Forum::whereIn('id', $ids)->orderby('created_at', 'asc')->where('title', 'iLIKE', '%'. $search.'%')->paginate(6);
        }
        else if (Str::upper($sortBy) === "MOST POPULAR"){
            $posts = Forum::whereIn('id', $ids)->withCount('userLikes')->where('title', 'iLIKE', '%'. $search.'%')->orderby('user_likes_count', 'desc')->paginate(6);
        }
        else if (Str::upper($sortBy) === "LEAST POPULAR"){
            $posts = Forum::whereIn('id', $ids)->withCount('userLikes')->where('title', 'iLIKE', '%'. $search.'%')->orderby('user_likes_count', 'asc')->paginate(6);
        }

        $logs = collect();
        if (Auth::check()){
            $user = Auth::user();
            $listPosts = ViewLog::where('user_id', $user->id)->orderBy('created_at', 'desc')->take(10)->get('forum_id');
            foreach($listPosts as $postId){
                $post = Forum::find($postId)->first();
                $logs->push($post);
            }
        }
        return view('posts', ['posts' => $posts ,'programmingLanguage' => $programmingLanguage, 'postType' => $postType, 'sortBy' => $sortBy, 'search' => $search, 'logs'=> $logs]);
    }

    public function clearLogs(){
        $user = Auth::user();
        ViewLog::where('user_id', $user->id)->delete();
        return redirect()->route('posts');
    }
}
