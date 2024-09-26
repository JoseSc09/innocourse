<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $review = new Review();
        $review->course_id = 1;
        $review->user_id = 6;
        $review->rating = 5;
        $review->comment = "increíble curso. aprendí mucho sobre JavaScript y la forma en que se presenta el contenido es muy clara.";
        $review->save();

        $review = new Review();
        $review->course_id = 1;
        $review->user_id = 7;
        $review->rating = 4;
        $review->comment = "buen curso, aunque me gustaría que incluyera más ejercicios prácticos.";
        $review->save();

        $review = new Review();
        $review->course_id = 1;
        $review->user_id = 8;
        $review->rating = 3;
        $review->comment = "curso interesante, pero la duración fue un poco corta para la cantidad de temas.";
        $review->save();

        $review = new Review();
        $review->course_id = 1;
        $review->user_id = 9;
        $review->rating = 3;
        $review->comment = "me gustó, pero podría mejorar en la parte de recursos adicionales.";
        $review->save();

        $review = new Review();
        $review->course_id = 2;
        $review->user_id = 7;
        $review->rating = 5;
        $review->comment = "excelente curso de desarrollo web. cada lección fue muy útil y clara.";
        $review->save();

        $review = new Review();
        $review->course_id = 3;
        $review->user_id = 8;
        $review->rating = 5;
        $review->comment = "el diseño UX/UI es un tema apasionante, y este curso lo cubrió a la perfección.";
        $review->save();

        $review = new Review();
        $review->course_id = 4;
        $review->user_id = 9;
        $review->rating = 5;
        $review->comment = "las metodologías ágiles son vitales hoy en día. Este curso me ayudó a entender su aplicación.";
        $review->save();

        $review = new Review();
        $review->course_id = 5;
        $review->user_id = 10;
        $review->rating = 5;
        $review->comment = "un curso muy completo sobre bases de datos. Perfecto para principiantes.";
        $review->save();

        $review = new Review();
        $review->course_id = 6;
        $review->user_id = 11;
        $review->rating = 5;
        $review->comment = "aprendí Python de una manera muy efectiva. ¡Lo recomiendo totalmente!";
        $review->save();
    }
}