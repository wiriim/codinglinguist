<?php

namespace App\Http\Controllers;

use App\Models\Badge;
use App\Models\UserBadge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BadgeController extends Controller
{
    public function addBadge(string $badge_name){
        $badge = Badge::where('badge_name', $badge_name)->first();
        $user = Auth::user();
        $userBadgeExist = UserBadge::where('user_id', $user->id)->where('badge_id', $badge->id)->exists();
        if ($userBadgeExist){
            $user->badges()->detach($badge);
        }
        $user->badges()->attach($badge);
    }
}
