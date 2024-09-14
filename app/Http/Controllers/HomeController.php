<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class HomeController extends Controller
{
    public function index()
    {

        $empresas = [
            [
                'name' => 'bbva',
                'image' => 'bbva.jpg',
                'graduates' => 100,
            ],
            [
                'name' => 'yape',
                'image' => 'yape.jpg',
                'graduates' => 150,
            ],
            [
                'name' => 'alicorp',
                'image' => 'alicorp.jpg',
                'graduates' => 100,
            ],
            [
                'name' => 'afp_integra',
                'image' => 'afp_integra.jpg',
                'graduates' => 800,
            ],
            [
                'name' => 'afp_prima',
                'image' => 'afp_prima.jpg',
                'graduates' => 40,
            ],
        ];
        
        $cursos = Curso::all();

        $iconos = [
            [
                'image' => 'iconInfo1.jpg',
                'texto' => 'Aprende algo nuevo cada 10 minutos',
            ],
            [
                'image' => 'iconInfo2.jpg',
                'texto' => 'Te enseñamos con material profesional de principiante a experto',
            ],
            [
                'image' => 'iconInfo3.jpg',
                'texto' => 'Pon a prueba tu progreso de forma interactiva',
            ],
            [
                'image' => 'iconInfo4.jpg',
                'texto' => 'Viabilidad en descargar las clases para volver a visualizar',
            ],
            [
                'image' => 'iconInfo5.jpg',
                'texto' => 'Visualiza tus logros y metas',
            ],
        ];
        
        $memberships = [
            [
                'tipo' => 'Pruebita',
                'precio' => 70,
                'duracion' => 'Curso de 4 meses',
            ], 
            [
                'tipo' => 'Achorado',
                'precio' => 125,
                'duracion' => '2 Curso de 4 meses',
            ], 
            [
                'tipo' => 'Opulencia',
                'precio' => 180,
                'duracion' => '3 Curso de 4 meses',
            ], 
        ];
        
        return view('index', compact('empresas','cursos','iconos','memberships'));
    }
}
