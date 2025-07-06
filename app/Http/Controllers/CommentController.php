<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Forum;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function createComment(Forum $post, Request $request){
        $comment = new Comment();
        $comment->user_id = auth()->user()->id;
        $comment->forum_id = $post->id;
        $comment->content = $request['comment'];
        $comment->save();
        return back()->with('success','Comment Added');
    }
}
