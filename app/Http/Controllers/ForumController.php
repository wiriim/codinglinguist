<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Comment;
use App\Models\CommentLike;
use App\Models\Forum;
use App\Models\ForumLike;
use Auth;
use Illuminate\Http\Request;
use Str;

class ForumController extends Controller
{
    public function getPostPage(Forum $post)
    {
        $post = Forum::find($post->id);
        $comments = Comment::where('forum_id', $post->id)->get();
        return view('post-detail', ['post' => $post, 'comments' => $comments]);
    }

    public function getEditPostPage(Forum $post)
    {
        $post = Forum::find($post->id);
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        return view('edit-post', ['post' => $post, 'categories' => $categories, 'categoryTypes' => $categoryTypes]);
    }

    public function editPost(Request $request, Forum $post)
    {
        $validated = $request->validate([
            'postTitle' => 'required',
            'programmingLanguage' => 'required',
            'postType' => 'required',
            'image' => 'image|nullable',
            'content' => 'required',
        ]);
        $post = Forum::find($post->id);
        $post->title = $validated["postTitle"];
        $post->content = $validated["content"];
        $post->category_id = $validated['programmingLanguage'];
        $post->category_type_id = $validated['postType'];
        $post->save();

        $comments = Comment::where('forum_id', $post->id)->get();
        return redirect()
            ->route('post-detail', ['post' => $post, 'comments' => $comments])
            ->with('success', 'Post has been edited.');
    }

    public function deletePost(Forum $post){
        $post = Forum::find($post->id);
        $post->delete();
        return redirect()->route('posts')->with('success','Post has been deleted.');
    }

    public function getAllPostPage()
    {
        $posts = Forum::all();
        return view('posts', ['posts' => $posts,'programmingLanguage' => "All", 'postType' => "All", 'sortBy' => "New"]);
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
            'postTitle' => 'required',
            'programmingLanguage' => 'required',
            'postType' => 'required',
            'image' => 'image|nullable',
            'content' => 'required',
        ]);

        $post = new Forum();
        $post->user_id = Auth::user()->id;
        $post->category_id = $validated['programmingLanguage'];
        $post->category_type_id = $validated['postType'];
        $post->title = $validated['postTitle'];
        $post->content = $validated['content'];
        $post->save();

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

    public function searchPosts(Request $request){
        $posts = Forum::where('title', 'LIKE', '%'. $request->postTitle.'%')->get();
        return view('posts', ['posts' => $posts]);
    }

    public function filterPosts(string $programmingLanguage, string $postType, string $sortBy){

        if (Str::upper($sortBy) === "NEW"){
            $posts = Forum::orderby('created_at', 'desc')->get();
        }
        else if (Str::upper($sortBy) === "OLD"){
            $posts = Forum::orderby('created_at', 'asc')->get();
        }
        else if (Str::upper($sortBy) === "MOST POPULAR"){
            $posts = Forum::withCount('userLikes')->orderby('user_likes_count', 'desc')->get();
        }
        else if (Str::upper($sortBy) === "LEAST POPULAR"){
            $posts = Forum::withCount('userLikes')->orderby('user_likes_count', 'asc')->get();
        }
        
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

        return view('posts', ['posts' => $posts ,'programmingLanguage' => $programmingLanguage, 'postType' => $postType, 'sortBy' => $sortBy]);
    }
}
