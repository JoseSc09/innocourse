<?php

namespace App\Http\Controllers;

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

        $preguntas = [
            [
                'pregunta' => '¿Qué es InnoCourse?',
                'respuesta' => 'InnoCourse es una plataforma educativa dedicada a ofrecer cursos innovadores y de
                            alta calidad para el desarrollo personal y profesional.',
            ],
            [
                'pregunta' => '¿Qué tipo de cursos ofrecen?',
                'respuesta' => 'Ofrecemos una amplia variedad de cursos en áreas como tecnología, negocios,
                        desarrollo personal, y más. Todos nuestros cursos están diseñados para ser prácticos y
                        relevantes.',
            ],
            [
                'pregunta' => '¿Los cursos son en línea o presenciales?',
                'respuesta' => 'Todos nuestros cursos son completamente en línea, lo que permite a nuestros
                        estudiantes aprender a su propio ritmo y desde cualquier lugar.',
            ],
            [
                'pregunta' => '¿Ofrecen certificados al completar los cursos?',
                'respuesta' => 'Sí, al completar exitosamente un curso, recibirás un certificado de finalización
                        que puedes agregar a tu currículum o perfil profesional.',
            ],
            [
                'pregunta' => '¿Ofrecen algún tipo de apoyo o tutoría durante los cursos?',
                'respuesta' => 'Sí, nuestros instructores y el equipo de soporte están disponibles para ayudarte
                        con cualquier duda o problema que puedas tener durante tu aprendizaje.',
            ],
            [
                'pregunta' => '¿Qué métodos de pago aceptan?',
                'respuesta' => 'Aceptamos varias formas de pago, incluyendo tarjetas de crédito, PayPal y
                        transferencias bancarias. Los detalles completos están disponibles en el proceso de inscripción.',
            ],
        ];
        return view('pages.opiniones.index', compact('opiniones','preguntas'));
    }
}
