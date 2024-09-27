<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use App\Models\Lesson;
use App\Models\Section;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
/*         $course = new Course();
        $course->title = 'JavaScript';
        $course->slug = 'javascript';
        $course->image = 'storage/images/courses/java_script.jpg';
        $course->description = 'Aprende JS este 2024';
        $course->price = 48;
        $course->instructor_id = 2;
        $course->category_id = 1;
        $course->save();

        $course = new Course();
        $course->title = 'Desarrollo Web';
        $course->slug = 'desarrollo-web';
        $course->image = 'storage/images/courses/desarrollo_web.jpg';
        $course->description = 'Aprende a crear tu propia web';
        $course->price = 78;
        $course->instructor_id = 3;
        $course->category_id = 1;
        $course->save();

        $course = new Course();
        $course->title = 'Diseño UX/UI';
        $course->slug = 'diseno-ux-ui';
        $course->image = 'storage/images/courses/diseño_ux_ui.jpg';
        $course->description = 'Aprende a crear diseños atractivos';
        $course->price = 38;
        $course->instructor_id = 4;
        $course->category_id = 1;
        $course->save();

        $course = new Course();
        $course->title = 'Metodologías Ágiles';
        $course->slug = 'metodologias-agiles';
        $course->image = 'storage/images/courses/metodologias_agiles.jpg';
        $course->description = 'Aumenta tu productividad';
        $course->price = 55;
        $course->instructor_id = 5;
        $course->category_id = 1;
        $course->save();

        $course = new Course();
        $course->title = 'Base de Datos';
        $course->slug = 'base-de-datos';
        $course->image = 'storage/images/courses/base_de_datos.jpg';
        $course->description = 'Aprende a gestionar datos';
        $course->price = 69;
        $course->instructor_id = 2;
        $course->category_id = 1;
        $course->save();

        $course = new Course();
        $course->title = 'Python';
        $course->slug = 'python';
        $course->image = 'storage/images/courses/python.jpg';
        $course->description = 'Aprende python este 2024';
        $course->price = 59;
        $course->instructor_id = 3;
        $course->category_id = 1;
        $course->save(); */

        // Crear 10 cursos utilizando el factory
        Course::factory()
            ->count(40) // Cambia esto al número de cursos que desees
            ->create()
            ->each(function ($course) {
                // Crea 4 secciones para cada curso
                $sections = Section::factory()
                    ->count(4)
                    ->create(['course_id' => $course->id]);

                // Para cada sección, crea 5 lecciones
                $sections->each(function ($section) {
                    Lesson::factory()->count(5)->create(['section_id' => $section->id]);
                });
            });
    }
}
