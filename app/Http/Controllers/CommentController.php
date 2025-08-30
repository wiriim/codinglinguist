<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use Auth;
use Gate;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function createComment(Forum $post, Request $request){
        $validated = $request->validate([
            'comment' => 'required|max:200',
        ]);
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->forum_id = $post->id;
        $comment->content = $validated['comment'];
        $comment->save();
        return back()->with('success','Comment Added');
    }

    public function deleteComment(Comment $comment){
        $comment = Comment::find($comment->id);
        if (! Gate::allows('admin-access') && $comment->user->id != Auth::id()) {
            abort(403);
        }
        $comment->delete();
        return back()->with('success','Comment Deleted');
    }

    public function likeComment(string $comment)
    {
        $comment = Comment::find($comment);
        $user = Auth::user();
        $user->commentLikes()->attach($comment);
        $likes = $comment->userLikes()->count();

        return response()->json([
            'success' => true,
            'likes' => $likes
        ]);
    }

    public function dislikeComment(string $comment)
    {
        $comment = Comment::find($comment);
        $user = Auth::user();
        $user->commentLikes()->detach($comment);
        $likes = $comment->userLikes()->count();

        return response()->json([
            'success' => true,
            'likes' => $likes
        ]);
    }
}
