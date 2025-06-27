<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use App\Models\Forum;
use Auth;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function getCreatePostPage()
    {
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        return view("create-post", [
            "categories" => $categories,
            "categoryTypes" => $categoryTypes
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

        $forum = new Forum();
        $forum->user_id = Auth::user()->id;
        $forum->category_id = $validated['programmingLanguage'];
        $forum->category_type_id = $validated['postType'];
        $forum->title = $validated['postTitle'];
        $forum->content = $validated['content'];
        $forum->save();
        return redirect()->route('home')->with('success','Post has been created.');
    }
}
