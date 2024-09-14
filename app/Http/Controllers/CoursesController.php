<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;


class CoursesController extends Controller
{
    public function index(){
       /* $cursos = [
            [
                'nombre' => 'Curso Desarrollo Web',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-desarrollo-web.png',
                'precio' => '180.00',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Back-end',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-back-end.png',
                'precio' => '99.99',
                'rating' => '7/10'
            ],
            [
                'nombre' => 'Curso de Inteligencia Artificial',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-inteligencia-artificial.png',
                'precio' => '99.99',
                'rating' => '9/10'
            ],
            [
                'nombre' => 'Curso de Data Science',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-data-science.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Marketing Digital',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-marketing-digital.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Blender',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-blender.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Ingles Avanzado',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-ingles.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Hacking Etico',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-hacking-etico.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Liderazgo',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-liderazgo.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Contenido Digital',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-contenido-digital.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Python',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-python.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
            [
                'nombre' => 'Curso de Base de Datos',
                'descrip' => '2 clases de prueba en tu primer curso!',
                'img' => 'Curso-base-de-datos.png',
                'precio' => '99.99',
                'rating' => '8/10'
            ],
        ];*/


        $cursos = Curso::all();


        return view('pages.cursos.index',compact('cursos'));
    }
}
