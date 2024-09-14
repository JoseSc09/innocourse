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
        $curso->imagen = 'storage/imagenes/iconInfo1.jpg';
        $curso->descripcion = 'Aprende JS este 2024';
        $curso->precio = 48;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();
        
        $curso = new Curso();
        $curso->titulo = 'Desarrollo Web';
        $curso->imagen = 'storage/imagenes/iconInfo1.jpg';
        $curso->descripcion = 'Aprende las ultimas tecnologias para crear tu propia página';
        $curso->precio = 78;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Diseño UX/UI';
        $curso->imagen = 'storage/imagenes/iconInfo1.jpg';
        $curso->descripcion = 'Aprende JS este 2024';
        $curso->precio = 48;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Metodologías Ágiles';
        $curso->imagen = 'storage/imagenes/iconInfo1.jpg';
        $curso->descripcion = 'Aprende JS este 2024';
        $curso->precio = 48;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Base de datos';
        $curso->imagen = 'storage/imagenes/iconInfo1.jpg';
        $curso->descripcion = 'Aprende JS este 2024';
        $curso->precio = 48;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();

        $curso = new Curso();
        $curso->titulo = 'Python';
        $curso->imagen = 'storage/imagenes/iconInfo1.jpg';
        $curso->descripcion = 'Aprende JS este 2024';
        $curso->precio = 48;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();

    }
}
