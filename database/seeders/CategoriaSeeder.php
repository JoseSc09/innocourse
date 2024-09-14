<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categoria = new Categoria();
        $categoria->nombre_categoria = 'FrontEnd';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre_categoria = 'Backend';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre_categoria = 'FullStack';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre_categoria = 'DevOps';
        $categoria->save();

    }
}
