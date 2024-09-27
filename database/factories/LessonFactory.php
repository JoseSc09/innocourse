<?php

namespace Database\Factories;

use App\Models\Lesson;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    protected $model = Lesson::class;
    
    public function definition(): array
    {
        return [
            'lesson_name' => $this->faker->words(3, true),
            'content' => $this->faker->paragraphs(3, true),
            'section_id' => Section::factory(), // Relación con la tabla de secciones
        ];
    }
}
