<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserLevel;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignInPage(){
        return view('sign-in');
    }

    public function getSignUpPage(){
        return view('sign-up');
    }

    public function signIn(Request $request){  
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('user-dashboard');
        }
        return back()->withErrors(['credential' => 'The provided credentials do not match our records.']);
    }

    public function signUp(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required'],
            'confPassword' => ['required'],
        ]);

        if ($credentials['password'] !== $credentials['confPassword']){
            return back()->withErrors(['match' => 'Password does not match.']);
        }

        $user = new User();
        $user->username = $credentials['username'];
        $user->email = $credentials['email'];
        $user->password = $credentials['password'];
        $user->status = 0;
        $user->point = 0;
        $user->role = "user";
        $user->save();

        $levelIds = [1, 41, 21];
        $courseId = 1;
        foreach($levelIds as $levelId){
            $user->levels()->attach($levelId, ['status' => 0, 'course_id' => $courseId++]);
        }
        return redirect()->route('sign-in')->with('success', 'Account successfully registered.');
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }
}
