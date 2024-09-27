<?php

namespace App\Http\Controllers;

use App\Models\Course;


class CoursesController extends Controller
{
    public function index(){
        $courses = Course::withAvg('reviews', 'rating')->paginate(8);
        return view('pages.cursos.index',compact('courses'));
    }

    public function show($slug){
        $course = Course::where('slug',$slug)->withAvg('reviews', 'rating')->first(); 
        return view('pages.cursos.show',compact('course'));
    }
}
