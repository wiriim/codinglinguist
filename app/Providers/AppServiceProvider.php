<?php

namespace App\Providers;

use App\Models\Course;
use App\Models\Level;
use App\Models\Question;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserQuestion;
use Auth;
use Gate;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrapFive();
        Paginator::useBootstrapFour();

        Gate::define('access-level', function (User $user, Level $level) {
            $userLevelExist = UserLevel::where('user_id', $user->id)->where('level_id', $level->id)->exists();
            if ($level->id == 1 || $level->id == 21 || $level->id == 41) return true;
            if (!Auth::check() || !$userLevelExist) return false;
            return true;
        });
        Gate::define('access-question', function (User $user, Question $question, Level $level) {
            $levelOneQuestions = $question->id == 1 || $question->id == 2 || $question->id == 3 || $question->id == 4
            || $question->id == 69 || $question->id == 70 || $question->id == 71 || $question->id == 72
            || $question->id == 137 || $question->id == 138 || $question->id == 139 || $question->id == 140;
            if ($levelOneQuestions) return true;
            
            if ($level->id == 11 || $level->id == 16 
            || $level->id == 31 || $level->id == 36 
            || $level->id == 51 || $level->id == 56 
            ){
                $userQuestion = UserQuestion::where('user_id', $user->id)->where('level_id', $level->id - 2)
                ->orderBy('question_id', 'desc')->first();
            }
            else{
                $userQuestion = UserQuestion::where('user_id', $user->id)->where('level_id', $level->id - 1)
                ->orderBy('question_id', 'desc')->first();
            }
           
            if($userQuestion == null) return false;
            $lastQuestion = Question::find($userQuestion->question_id);
            $allowedQuestionId = 0;
            if ($lastQuestion->number == 1) $allowedQuestionId = $userQuestion->question_id + 3;
            else if ($lastQuestion->number == 2) $allowedQuestionId = $userQuestion->question_id + 2;
            else if ($lastQuestion->number == 3) $allowedQuestionId = $userQuestion->question_id + 1;
            else if ($lastQuestion->number == 4) $allowedQuestionId = $userQuestion->question_id + 4;

            if ($question->number == 1 && $allowedQuestionId >= $question->id) return true;
            else if ($question->number == 2 && $allowedQuestionId >= $question->id) return true;
            else if ($question->number == 3 && $allowedQuestionId >= $question->id) return true;
            else if ($question->number == 4 && $allowedQuestionId >= $question->id) return true;
            
            if (!Auth::check() ) return false;
            return false;
        });
    }
}
