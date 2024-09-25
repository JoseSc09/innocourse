<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $curso = new Curso();
        $curso->titulo = 'JavaScript';
        $curso->imagen = 'storage/images/cursos/java_script.jpg';
        $curso->descripcion = 'Aprende JS este 2024';
        $curso->precio = 48;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();
        
        $curso = new Curso();
        $curso->titulo = 'Desarrollo Web';
        $curso->imagen = 'storage/images/cursos/desarrollo_web.jpg';
        $curso->descripcion = 'Aprende a crear tu propia web';
        $curso->precio = 78;
        $curso->instructor_id = 3;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Diseño UX/UI';
        $curso->imagen = 'storage/images/cursos/diseño_ux_ui.jpg';
        $curso->descripcion = 'Aprende a crear diseños atractivos';
        $curso->precio = 38;
        $curso->instructor_id = 4;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Metodologías Ágiles';
        $curso->imagen = 'storage/images/cursos/metodologias_agiles.jpg';
        $curso->descripcion = 'Aumenta tu productividad';
        $curso->precio = 55;
        $curso->instructor_id = 5;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Base de Datos';
        $curso->imagen = 'storage/images/cursos/base_de_datos.jpg';
        $curso->descripcion = 'Aprende a gestionar datos';
        $curso->precio = 69;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Python';
        $curso->imagen = 'storage/images/cursos/python.jpg';
        $curso->descripcion = 'Aprende python este 2024';
        $curso->precio = 59;
        $curso->instructor_id = 3;
        $curso->categoria_id = 1;
        $curso->save();

    }
}
