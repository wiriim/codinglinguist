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

    public function getAboutUsPage(){
        return view('about-us');
    }

    public function getLeaderboard(){
        $users = User::orderBy('point', 'desc')->where('point', '>', 0)->paginate(10);
        return $users;
    }
}
