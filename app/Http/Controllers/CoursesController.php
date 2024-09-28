<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;


class CoursesController extends Controller
{
    public function index(){
        $courses = Course::withAvg('reviews', 'rating')->paginate(8);
        $categories = Category::all();
        return view('pages.cursos.index',compact('courses','categories'));
    }

    public function show($slug){
        $course = Course::where('slug',$slug)->withAvg('reviews', 'rating')->first(); 
        return view('pages.cursos.show',compact('course'));
    }
}
