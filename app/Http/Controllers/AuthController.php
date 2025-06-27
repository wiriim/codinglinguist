<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'email' => ['required'],
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
        return redirect()->route('sign-in')->with('success', 'Account successfully registered.');
    }
}
