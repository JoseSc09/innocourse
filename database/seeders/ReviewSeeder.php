<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $review = new Review();
        $review->curso_id = 1;
        $review->usuario_id = 6;
        $review->calificacion= 5;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 1;
        $review->usuario_id = 7;
        $review->calificacion= 4;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 1;
        $review->usuario_id = 8;
        $review->calificacion= 3;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 1;
        $review->usuario_id = 9;
        $review->calificacion= 3;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 2;
        $review->usuario_id = 7;
        $review->calificacion= 5;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 3;
        $review->usuario_id = 8;
        $review->calificacion= 5;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 4;
        $review->usuario_id = 9;
        $review->calificacion= 5;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 5;
        $review->usuario_id = 10;
        $review->calificacion= 5;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();

        $review = new Review();
        $review->curso_id = 6;
        $review->usuario_id = 11;
        $review->calificacion= 5;
        $review->comentario= "Los cursos de InnoCourse han transformado mi enfoque profesional. La calidad del contenido y la experiencia de los instructores son excepcionales.";
        $review->save();
    }
}
