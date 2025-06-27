<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryType;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function getCreatePostPage(){
        $categories = Category::all();
        $categoryTypes = CategoryType::all();
        return view("create-post", [
            "categories" => $categories,
            "categoryTypes" => $categoryTypes
        ]);
    }
}
