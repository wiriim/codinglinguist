<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Level;
use App\Models\Question;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCoursePage(string $course_id){
        $course = Course::find($course_id);

        // Get levels for the specific course, organized by sections
        $levelsBS = Level::where('course_id', $course_id)
                        ->where('number', '>=', 1)
                        ->where('number', '<=', 10)
                        ->get();

        $levelCL = Level::where('course_id', $course_id)
                        ->where('number', '>=', 11)
                        ->where('number', '<=', 15)
                        ->get();

        $levelFN = Level::where('course_id', $course_id)
                        ->where('number', '>=', 16)
                        ->where('number', '<=', 20)
                        ->get();

        return view('course', ['course'=> $course, 'levelBS'=>$levelsBS, 'levelCL'=>$levelCL, 'levelFN'=>$levelFN]);
    }

    public function getLevelPage(string $course_id, string $level_id){
        $level = Level::find($level_id);
        return view('level', ['level'=> $level]);
    }
    public function getQuestionPage(string $course_id, string $level_id, string $question_id){
        $level = Level::find($level_id);
        $question = Question::find($question_id);    
        return view('question', ['level'=> $level, 'question'=> $question]);
    }
}
