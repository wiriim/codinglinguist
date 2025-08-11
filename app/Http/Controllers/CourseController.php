<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Level;
use App\Models\Question;
use App\Models\User;
use App\Models\UserLevel;
use App\Models\UserQuestion;
use Auth;
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
        return view('level',  ['level'=> $level]);
    }

    public function getQuestionPage(string $course_id, string $level_id, string $question_id){
        $level = $this->getLevel($level_id);
        $question = $this->getQuestion($question_id);    
        return view('question', ['level'=> $level, 'question'=> $question]);
    }

    public function submitAnswer(string $course_id, string $level_id, string $question_id, Request $request){
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
