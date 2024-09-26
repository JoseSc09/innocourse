<?php

namespace App\Http\Controllers;

use App\Models\Course;


class CoursesController extends Controller
{
    public function index(){
        $courses = Course::withAvg('reviews', 'rating')->get();
        return view('pages.cursos.index',compact('courses'));
    }
}
