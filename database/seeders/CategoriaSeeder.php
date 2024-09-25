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
        $categoria->nombre_categoria = 'frontend';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre_categoria = 'backend';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre_categoria = 'fullStack';
        $categoria->save();

        $categoria = new Categoria();
        $categoria->nombre_categoria = 'devops';
        $categoria->save();

    }
}
