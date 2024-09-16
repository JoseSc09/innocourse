<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    //
    public function index()
    {
        
        //trae toda la informacion del curso con su instructor, pero no se repiten los instructores
        $subquery = Curso::select('instructor_id', DB::raw('MIN(curso_id) as curso_id'))
            ->groupBy('instructor_id');

        $cursos = Curso::joinSub($subquery, 'subquery', function ($join) {
            $join->on('cursos.curso_id', '=', 'subquery.curso_id');
        })
            ->with('instructor')
            ->get();

        
        $principal = About::where('id_about', 1)->first();
        $mision = About::where('id_about', 2)->first();
        $vision = About::where('id_about', 3)->first();

        return view('pages.sobre-nosotros.index', compact('cursos','principal','mision','vision'));
    }
}
