<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Level;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function getCoursePage(string $course_id){
        $course = Course::find($course_id);
        if ($course_id == 1){
            $levelsBS = Level::where("id", "<", 11)->get();
            $levelCL = Level::where("id", "<", 16)->where("id", ">", 10)->get();
            $levelFN = Level::where("id", "<", 21)->where("id", ">", 15)->get();
        }
        
        return view('course', ['course'=> $course, 'levelBS'=>$levelsBS, 'levelCL'=>$levelCL, 'levelFN'=>$levelFN]);
    }
}
