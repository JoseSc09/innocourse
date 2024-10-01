<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    protected $model = Course::class;
    
    public function definition(): array
    {
        return [
            'image' => 'storage/images/courses/img_course_default.jpg',
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->randomFloat(2, 10, 500),
            'instructor_id' => User::where('rol_id', 2)->inRandomOrder()->first()->id, // Selecciona un instructor con rol_id=2
            'category_id' => Category::inRandomOrder()->first()->id, // Selecciona aleatoriamente una categoría
        ];
    }
}
