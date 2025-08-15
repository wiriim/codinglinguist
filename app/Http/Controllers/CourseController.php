<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Level;
use App\Models\Question;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserQuestion;
use Auth;
use Gate;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCoursePage(string $course_id){
        $course = $this->getCourse($course_id);
        if ($course_id == 1){
            $levelBS = Level::where("id", "<", 11)->get();
            $levelCL = Level::where("id", "<", 16)->where("id", ">", 10)->get();
            $levelFN = Level::where("id", "<", 21)->where("id", ">", 15)->get();
        }
        else if ($course_id == 2){
            $levelBS = Level::where("id", "<", 51)->where("id", ">", 40)->get();
            $levelCL = Level::where("id", "<", 56)->where("id", ">", 50)->get();
            $levelFN = Level::where("id", ">", 55)->get();
        }
        else if ($course_id == 3){
            $levelBS = Level::where("id", "<", 31)->where("id", ">", 20)->get();
            $levelCL = Level::where("id", "<", 36)->where("id", ">", 30)->get();
            $levelFN = Level::where("id", "<", 41)->where("id", ">", 35)->get();
        }
        
        return view('course', ['course'=> $course, 'levelBS'=>$levelBS, 'levelCL'=>$levelCL, 'levelFN'=>$levelFN]);
    }

    public function getLevelPage(string $course_id, string $level_id){
        $level = $this->getLevel($level_id);
        if (! Gate::allows('access-level', $level) && $level->id != 1 && $level->id != 21 && $level->id != 41) {
            abort(403);
        }
        return view('level',  ['level'=> $level]);
    }

    public function getQuestionPage(string $course_id, string $level_id, string $question_id){
        $level = $this->getLevel($level_id);
        $question = $this->getQuestion($question_id);   
        
        $course = $this->getCourse($course_id);
        if (! Gate::allows('access-question', [$question, $level]) && $question->id != 1 && $question->id != 2 && $question->id != 3 
        && $question->id != 4 && $question->id != 69 && $question->id != 70 && $question->id != 71 && $question->id != 72
        && $question->id != 137 && $question->id != 138 && $question->id != 139 && $question->id != 140) {
            abort(403);
        } 
        return view('question', ['level'=> $level, 'question'=> $question]);
    }

    public function submitAnswer(string $course_id, string $level_id, string $question_id, Request $request){
        // Badges
        $badgeController = new BadgeController();
        $completeLevel = UserLevel::where('user_id', Auth::user()->id)->where('level_id', 1)->where('status', 1)->exists();
        if ($completeLevel){
            $badgeController->addBadge('complete_level');
        }
        $userAnswer = $request->answer;
        $question = $this->getQuestion($question_id);
        $success = false;
        if ($userAnswer == $question->answer){
            if(Auth::check()){
                $userQuestion = new UserQuestion();
                $userQuestion->user_id = Auth::id();
                $userQuestion->level_id = $level_id;
                $userQuestion->question_id = $question_id;
                $userQuestion->status = 1;
                $userQuestion->save();
            }
            $success = true;
        }

        if (Auth::check() && UserQuestion::where('level_id', $level_id)->where('user_id', Auth::id())->count() == 4){
            $this->saveProgress($level_id, $course_id);
        }

        return response()->json([
            'success' => $success
        ]);
    }

    function saveProgress(string $level_id, string $course_id){
        $nextLevelId = $level_id + 1;
        if ($nextLevelId == 61){ // Update last level
            Auth::user()->levels()->updateExistingPivot($level_id, ['status' => 1]);
        }
        else{
            if ($nextLevelId != 21 && $nextLevelId != 41){
                $userLevel = new UserLevel();
                $userLevel->user_id = Auth::id();
                $userLevel->level_id = $nextLevelId;
                $userLevel->course_id = $course_id;
                $userLevel->status = 0;
                $userLevel->save();
            }
            
            // Update current level
            Auth::user()->levels()->updateExistingPivot($level_id, ['status' => 1]);
        }

        $level = $this->getLevel($level_id);
        $point = $level->point;
        $user = Auth::user();
        $user->point = $user->point + $point;
        $user->save();  

        // Badges
        $badgeController = new BadgeController();
        $homeController = new HomeController();

        $completeLevel = UserLevel::where('user_id', $user->id)->where('level_id', 1)->where('status', 1)->exists();
        if ($completeLevel){
            $badgeController->addBadge('complete_level');
        }
        $cClear = UserLevel::where('user_id', $user->id)->where('level_id', 20)->where('status', 1)->exists();
        if ($cClear){
            $badgeController->addBadge('c_clear');
        }
        $pythonClear = UserLevel::where('user_id', $user->id)->where('level_id', 60)->where('status', 1)->exists();
        if ($pythonClear){
            $badgeController->addBadge('python_clear');
        }
        $javaClear = UserLevel::where('user_id', $user->id)->where('level_id', 40)->where('status', 1)->exists();
        if ($javaClear){
            $badgeController->addBadge('java_clear');
        }
        $hundredPoints = $user->point >= 100;
        if  ($hundredPoints){
            $badgeController->addBadge('100_point');
        }
        $threeHundredPoints = $user->point >= 300;
        if  ($threeHundredPoints){
            $badgeController->addBadge('300_point');
        }
        $fiveHundredPoints = $user->point >= 500;
        if  ($fiveHundredPoints){
            $badgeController->addBadge('500_point');
        }
        $allClear = UserLevel::where('user_id', $user->id)->where('status', 1)->count() == 60;
        if  ($allClear){
            $badgeController->addBadge('all_clear');
        }

        $users = $homeController->getLeaderboard();
        if ($users[0]->point > 0){
            $badgeController->addBadge('first_place');
        }
        if ($users[1]->point > 0){
            $badgeController->addBadge('second_place');
        }
        if ($users[2]->point > 0){
            $badgeController->addBadge('third_place');
        }
    }

    public function getBossAnswerInput(string $level_id){
        $level = $this->getLevel($level_id);
        $answer = $level->answer;
        $input = $level->input;
        return response()->json([
            'answer' => $answer,
            'input' => $input
        ]);
    }
    // Private Functions
    private function getCourse(string $course_id){
        $course = Course::find($course_id);
        return $course;
    }

    private function getLevel(string $level_id){
        $level = Level::find($level_id);
        return $level;
    }

    private function getQuestion(string $question_id){
        $question = Question::find($question_id);
        return $question;
    }

}
