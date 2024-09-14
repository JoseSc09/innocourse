<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class OpinionsController extends Controller
{
    public function index()
    {

        $opiniones = [
            [
                'image' => 'user.png',
                'name' => 'Carlos G.',
                'usuario' => '@Carlos G.',
                'image2' => 'stars.png',
                'comentario' => 'Gracias a InnoCourse, he adquirido habilidades prácticas que he podido aplicar directamente en mi trabajo diario. Sin duda, una inversión valiosa.',
            ],
            [
                'image' => 'user.png',
                'name' => 'Carlos G.',
                'usuario' => '@Carlos G.',
                'image2' => 'stars.png',
                'comentario' => 'Gracias a InnoCourse, he adquirido habilidades prácticas
                    que he podido aplicar directamente en mi trabajo diario. Sin duda, una inversión valiosa.',
            ],
            [
                'image' => 'user.png',
                'name' => 'Maria J.',
                'usuario' => '@Maria J',
                'image2' => 'stars.png',
                'comentario' => 'El enfoque innovador y actualizado de los cursos me ha
                    permitido mantenerme al día con las últimas tendencias de mi industria. Altamente recomendado.',
            ],
            [
                'image' => 'user.png',
                'name' => 'Luis F.',
                'usuario' => '@Luis F.',
                'image2' => 'stars.png',
                'comentario' => '>La plataforma es fácil de usar y el soporte del equipo
                    de InnoCourse es excelente. Siempre están disponibles para ayudar y guiar.',
            ],
            [
                'image' => 'user.png',
                'name' => 'Elena P.',
                'usuario' => '@Elena P.',
                'image2' => 'stars.png',
                'comentario' => 'Los cursos son muy completos y están bien estructurados.
                    He aprendido muchísimo y me siento más segura en mi ámbito profesional.',
            ],
            [
                'image' => 'user.png',
                'name' => 'Ricardo T.',
                'usuario' => '@Ricardo T.',
                'image2' => 'stars.png',
                'comentario' => 'InnoCourse ofrece una educación de calidad que se adapta
                    a las necesidades del mercado actual. Los instructores son expertos en sus campos y se nota.',
            ],  
        ];

        $faqs = Faq::all();
        return view('pages.opiniones.index', compact('opiniones','faqs'));
    }
}
