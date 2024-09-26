<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Subscription;

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
        
        $features = [
            [
                'icon' => 'fa-regular fa-circle-play',
                'content' => 'Aprende algo nuevo cada 10 minutos',
            ],
            [
                'icon' => 'fa-solid fa-route',
                'content' => 'Te enseñamos con material profesional de principiante a experto',
            ],
            [
                'icon' => 'fa-solid fa-arrow-trend-up',
                'content' => 'Pon a prueba tu progreso de forma interactiva',
            ],
            [
                'icon' => 'fa-solid fa-download',
                'content' => 'Viabilidad en descargar las clases para volver a visualizar',
            ],
            [
                'icon' => 'fa-regular fa-circle-check',
                'content' => 'Visualiza tus logros y metas',
            ],
        ];
        
        $subscriptions = Subscription::all();
        
        $courses = Course::take(6)->get();
        return view('index', compact('empresas','courses','features','subscriptions'));
    }
}
