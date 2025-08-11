<?php

namespace App\Http\Controllers;

use App\Models\Reply;
use Auth;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    public function createReply(string $commentId, Request $request){
        $reply = new Reply();
        $reply->user_id = auth()->user()->id;
        $reply->comment_id = $commentId;
        $reply->content = $request['content'];
        $reply->save();
        return response()->json([
            'success' => true,
            'replyId' => $reply->id,
            'createdAt' => $reply->created_at->format('d/m/Y')
        ]);
    }

    public function deleteReply(string $replyId){
        $reply = Reply::find($replyId);
        $reply->delete();
        return back()->with('success','Reply Deleted');
    }

    public function likeReply(string $replyId)
    {
        $reply = Reply::find($replyId);
        $user = Auth::user();
        $user->replyLikes()->attach($reply);
        $likes = $reply->userLikes()->count();

        return response()->json([
            'success' => true,
            'likes' => $likes
        ]);
    }

    public function dislikeReply(string $replyId)
    {
        $reply = Reply::find($replyId);
        $user = Auth::user();
        $user->replyLikes()->detach($reply);
        $likes = $reply->userLikes()->count();

        return response()->json([
            'success' => true,
            'likes' => $likes
        ]);
    }
}
