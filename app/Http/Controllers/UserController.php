<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function getProfilePage(){
        $posts = Auth::user()->forums;
        return view('profile', ['posts'=> $posts]);
    }
}
