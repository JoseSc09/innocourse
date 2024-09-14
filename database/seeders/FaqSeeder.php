<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faq = new Faq();
        $faq->pregunta = '¿Qué es InnoCourse?';
        $faq->respuesta = 'InnoCourse es una plataforma educativa dedicada a ofrecer cursos innovadores y de
                            alta calidad para el desarrollo personal y profesional.';
        $faq->save();

        $faq = new Faq();
        $faq->pregunta = '¿Qué tipo de cursos ofrecen?';
        $faq->respuesta = 'Ofrecemos una amplia variedad de cursos en áreas como tecnología, negocios, desarrollo personal, y más. Todos nuestros cursos están diseñados para ser prácticos y relevantes.';
        $faq->save();

        $faq = new Faq();
        $faq->pregunta = '¿Los cursos son en línea o presenciales?';
        $faq->respuesta = 'Todos nuestros cursos son completamente en línea, lo que permite a nuestros estudiantes aprender a su propio ritmo y desde cualquier lugar.';
        $faq->save();

        $faq = new Faq();
        $faq->pregunta = '¿Ofrecen certificados al completar los cursos?';
        $faq->respuesta = 'Sí, al completar exitosamente un curso, recibirás un certificado de finalización que puedes agregar a tu currículum o perfil profesional.';
        $faq->save();

        $faq = new Faq();
        $faq->pregunta = '¿Ofrecen algún tipo de apoyo o tutoría durante los cursos?';
        $faq->respuesta = 'Sí, nuestros instructores y el equipo de soporte están disponibles para ayudarte con cualquier duda o problema que puedas tener durante tu aprendizaje.';
        $faq->save();

        $faq = new Faq();
        $faq->pregunta = '¿Qué métodos de pago aceptan?';
        $faq->respuesta = 'Aceptamos varias formas de pago, incluyendo tarjetas de crédito, PayPal y transferencias bancarias. Los detalles completos están disponibles en el proceso de inscripción.';
        $faq->save();
    }
}
