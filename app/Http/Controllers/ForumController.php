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

    public function getAllPostPage()
    {
        $posts = Forum::all();
        return view('posts', ['posts' => $posts]);
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

    public function likePost(Forum $post)
    {
        $user = Auth::user();
        $user->forumLikes()->attach($post);
        return back()->with('success', 'Comment Liked');
    }

    public function dislikePost(Forum $post)
    {
        $user = Auth::user();
        $user->forumLikes()->detach($post);
        return back()->with('success', 'Comment Disliked');
    }
}
