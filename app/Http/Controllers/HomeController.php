<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getHomePage(){
        return view('home');
    }

    public function getLeaderboardPage(){
        $users = $this->getLeaderboard();
        return view('leaderboard',['users'=>$users]);
    }

    // Private Functions
    private function getLeaderboard(){
        $users = User::orderBy('point', 'desc')->paginate(10);
        return $users;
    }
}
