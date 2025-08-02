<?php

namespace App\Http\Controllers;

use App\Models\User;
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

    public function getEditProfilePage(){
        return view('edit-profile');
    }

    public function editProfile(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'profilePicture' => ['image', 'nullable'],
            'oldPassword' => ['required'],
            'newPassword' => ['required'],
        ]);

        if (!password_verify($credentials['oldPassword'],Auth::user()->password)){
            return back()->withErrors(['oldPassword' => 'Password does not match.']);
        }

        $user = Auth::user();
        $user->username = $credentials['username'];
        $user->email = $credentials['email'];
        $user->save();
        return redirect()->route('profile');

    }
}
