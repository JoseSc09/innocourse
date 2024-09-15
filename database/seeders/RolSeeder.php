<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Rol;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rol = new Rol();
        $rol->nombre_rol = 'administrador';
        $rol->save();
        
        $rol = new Rol();
        $rol->nombre_rol = 'instructor';
        $rol->save();

        $rol = new Rol();
        $rol->nombre_rol = 'estudiante';
        $rol->save();



    }
}
