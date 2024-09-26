<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $about = new About();
        $about->title = 'innocourse forma profesionales para la vida tecnológica';
        $about->text = 'somos InnoCourse, una plataforma educativa dedicada a fusionar innovación y aprendizaje. Nuestro objetivo es proporcionar experiencias de aprendizaje transformadoras que impulsen el desarrollo personal y profesional. Nos especializamos en crear cursos dinámicos y actualizados que preparan a nuestros estudiantes para los desafíos del mundo moderno.';
        $about->image = 'storage/images/about/about_img1.jpg';
        $about->save();

        $about = new About();
        $about->title = 'misión';
        $about->text = 'empoderar a los estudiantes mediante herramientas educativas innovadoras y accesibles que fomenten el aprendizaje continuo y el desarrollo de habilidades críticas para el futuro. Nos comprometemos a ofrecer una educación de alta calidad, adaptada a las necesidades cambiantes del mercado global y centrada en el éxito de nuestros estudiantes.';
        $about->image = 'storage/images/about/about_mision.jpg';
        $about->save();

        $about = new About();
        $about->title = 'visión';
        $about->text = 'ser la plataforma líder en educación innovadora, reconocida por transformar la manera en que las personas aprenden y aplican conocimientos, creando un impacto positivo en sus vidas y en la sociedad.';
        $about->image = 'storage/images/about/about_vision.jpg';
        $about->save();
    }
}