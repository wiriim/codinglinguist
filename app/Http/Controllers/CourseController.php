<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Level;
use App\Models\Question;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCoursePage(string $course_id){
        $course = $this->getCourse($course_id);
        if ($course_id == 1){
            $levelsBS = Level::where("id", "<", 11)->get();
            $levelCL = Level::where("id", "<", 16)->where("id", ">", 10)->get();
            $levelFN = Level::where("id", "<", 21)->where("id", ">", 15)->get();
        }
        
        return view('course', ['course'=> $course, 'levelBS'=>$levelsBS, 'levelCL'=>$levelCL, 'levelFN'=>$levelFN]);
    }

    public function getLevelPage(string $course_id, string $level_id){
        $level = $this->getLevel($level_id);
        return view('level', ['level'=> $level]);
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
            $success = true;
        }
        return response()->json([
            'success' => $success
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
