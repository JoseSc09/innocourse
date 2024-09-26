<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Course;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    public function index()
    {
        // Trae toda la información del curso con su instructor, pero no se repiten los instructores
        $subquery = Course::select('instructor_id', DB::raw('MIN(id) as id'))
            ->groupBy('instructor_id');

        $courses = Course::joinSub($subquery, 'subquery', function ($join) {
            $join->on('courses.id', '=', 'subquery.id');
        })
            ->with('instructor')
            ->get();

        // Obtener todos los IDs de la tabla about
        $aboutIds = About::pluck('id')->toArray(); // Esto te dará un array con todos los IDs
        // Obtener los datos necesarios desde la tabla about
        $aboutData = About::whereIn('id', $aboutIds)->get();

        // Crear una colección de secciones usando lógica directa
        $sections = $aboutData->map(function ($data, $key) {
            return [
                'data' => $data,
                'reverse' => $key % 2 === 1 // Alterna el valor de reverse para cada elemento
            ];
        });

        return view('pages.sobre-nosotros.index', compact('courses', 'sections'));
    }
}
