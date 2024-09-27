<?php

namespace Database\Factories;

use App\Models\Course;
use App\Models\Section;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Section>
 */
class SectionFactory extends Factory
{
    protected $model = Section::class;
    
    public function definition(): array
    {
        return [
            'section_name' => $this->faker->words(3, true),
            'course_id' => Course::factory(), // Relación con la tabla de cursos
        ];
    }
}
