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
        $faq->question = '¿qué es innocourse?';
        $faq->answer = 'innocourse es una plataforma educativa dedicada a ofrecer cursos innovadores y de alta calidad para el desarrollo personal y profesional.';
        $faq->save();

        $faq = new Faq();
        $faq->question = '¿qué tipo de cursos ofrecen?';
        $faq->answer = 'ofrecemos una amplia variedad de cursos en áreas como tecnología, negocios, desarrollo personal, y más. Todos nuestros cursos están diseñados para ser prácticos y relevantes.';
        $faq->save();

        $faq = new Faq();
        $faq->question = '¿los cursos son en línea o presenciales?';
        $faq->answer = 'todos nuestros cursos son completamente en línea, lo que permite a nuestros estudiantes aprender a su propio ritmo y desde cualquier lugar.';
        $faq->save();

        $faq = new Faq();
        $faq->question = '¿ofrecen certificados al completar los cursos?';
        $faq->answer = 'sí, al completar exitosamente un curso, recibirás un certificado de finalización que puedes agregar a tu currículum o perfil profesional.';
        $faq->save();

        $faq = new Faq();
        $faq->question = '¿ofrecen algún tipo de apoyo o tutoría durante los cursos?';
        $faq->answer = 'sí, nuestros instructores y el equipo de soporte están disponibles para ayudarte con cualquier duda o problema que puedas tener durante tu aprendizaje.';
        $faq->save();

        $faq = new Faq();
        $faq->question = '¿qué métodos de pago aceptan?';
        $faq->answer = 'aceptamos varias formas de pago, incluyendo tarjetas de crédito, PayPal y transferencias bancarias. Los detalles completos están disponibles en el proceso de inscripción.';
        $faq->save();
    }
}
