<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $profesores = [
            [
                'nombre' => 'Carla Casas',
                'cargo' => 'CEO de la empresa',
                'curso' => 'Liderazgo',
                'foto' => 'about_img4.jpg',
            ],
            [
                'nombre' => 'Andres Galicia',
                'cargo' => 'Ingeniero de base de datos',
                'curso' => 'Data',
                'foto' => 'about_img5.jpg',
            ],
            [
                'nombre' => 'Luz Lucero',
                'cargo' => 'Profesional en Back-end',
                'curso' => 'Backend',
                'foto' => 'about_img6.jpg',
            ],
            [
                'nombre' => 'Juanito PicaPiedra',
                'cargo' => 'Profesional Front-End',
                'curso' => 'Diseño UX/UI',
                'foto' => 'about_img7.jpg',
            ],
        ];
        return view('pages.sobre-nosotros.index',compact('profesores'));
    }
}
