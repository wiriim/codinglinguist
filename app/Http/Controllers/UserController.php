<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getProfilePage(){
        $posts = Auth::user()->forums;
        $cProgress = Auth::user()->levels()->where('user_level.course_id', 1)->where('status', 1)->count();
        $pythonProgress = Auth::user()->levels()->where('user_level.course_id', 2)->where('status', 1)->count();
        $javaProgress = Auth::user()->levels()->where('user_level.course_id', 3)->where('status', 1)->count();
        return view('profile', ['posts'=> $posts, 'cProgress' => $cProgress, 'pythonProgress' => $pythonProgress, 'javaProgress' => $javaProgress]);
    }
}
