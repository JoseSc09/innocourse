<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;


class CoursesController extends Controller
{
    public function index(){
        $cursos = Curso::withAvg('reviews', 'calificacion')->get();
        return view('pages.cursos.index',compact('cursos'));
    }
}
