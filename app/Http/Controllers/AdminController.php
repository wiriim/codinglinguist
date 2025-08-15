<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function getAdminBanPage(){
        $users = User::where('status', 0)->where('email', '!=', 'admin@admin.com')->paginate(10);
        return view('admin.admin-ban', ['users'=> $users]);
    }

    public function getAdminUnbanPage(){
        $users = User::where('status', 1)->where('email', '!=', 'admin@admin.com')->paginate(10);
        return view('admin.admin-unban', ['users'=> $users]);
    }

    public function ban(User $user){
        $user = User::find($user->id);
        $user->status = 1;
        $user->save();
        $users = User::where('status', 0)->where('email', '!=', 'admin@admin.com')->paginate(10);
        return view('admin.admin-ban', ['users'=> $users]);
    }
    public function unban(User $user){
        $user = User::find($user->id);
        $user->status = 0;
        $user->save();
        $users = User::where('status', 1)->where('email', '!=', 'admin@admin.com')->paginate(10);
        return view('admin.admin-unban', ['users'=> $users]);
    }
}
