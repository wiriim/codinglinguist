<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function getUserDashboardPage()
    {
        return view('user-dashboard');
    }

    public function getProfilePage(string $userId)
    {
        $user = User::find($userId);
        $posts = $user->forums;
        $cProgress = $user->levels()->where('user_level.course_id', 1)->where('status', 1)->count();
        $pythonProgress = $user->levels()->where('user_level.course_id', 2)->where('status', 1)->count();
        $javaProgress = $user->levels()->where('user_level.course_id', 3)->where('status', 1)->count();
        return view('profile', ['user' => $user, 'posts' => $posts, 'cProgress' => $cProgress, 'pythonProgress' => $pythonProgress, 'javaProgress' => $javaProgress]);
    }

    public function getEditProfilePage()
    {
        return view('edit-profile');
    }

    public function editProfile(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|min:5',
            'email' => ['required', 'email'],
            'profilePicture' => ['image', 'nullable']
        ]);

        if ($request['oldPassword'] != null 
            && !password_verify($request['oldPassword'], Auth::user()->password)){
            return back()->withErrors(['oldPassword' => 'Password does not match.']);
        }

        if ($request['oldPassword'] != null && strlen($request['newPassword']) < 8) {
            return back()->withErrors(['newPassword' => 'Password must be at least 8 characters.']);
        }

        if (User::where('username', '=', $request['username'])->exists() 
            && User::where('username', '=', $request['username'])->first()->id != Auth::id()){
            return back()->withErrors(['username' => 'Username has been taken.']); 
        }

        $user = Auth::user();
        $user->username = $credentials['username'];
        $user->email = $credentials['email'];
        if ($request->has('profilePicture')) {
            $path = Storage::disk('supabase')->put('user/'.$credentials['username'], $request->file('profilePicture'));
            $validate['profilePicture'] = $path;
            if ($user->image !== null) {
                Storage::disk('supabase')->delete($user->image);
            }
            $user->image = $validate['profilePicture'];
        }
        if ($request['oldPassword'] != null) {
            $user->password = $request['newPassword'];
        }
        $user->save();
        return redirect()->route('profile', Auth::id());

    }
}
