<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder  extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = new Category();
        $category->category_name = 'FrontEnd';
        $category->save();

        $category = new Category();
        $category->category_name = 'BackEnd';
        $category->save();

        $category = new Category();
        $category->category_name = 'FullStack';
        $category->save();

        $category = new Category();
        $category->category_name = 'DevOps';
        $category->save();
    }
}
