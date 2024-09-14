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
        $curso->descripcion = 'Aprende JS este 2024';
        $curso->precio = 48;
        $curso->instructor_id = 2;
        $curso->categoria_id = 1;
        $curso->save();
        

    }
}
