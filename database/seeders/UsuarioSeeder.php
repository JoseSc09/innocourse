<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $usuario = new Usuario();
        $usuario->nombre = 'Admin';
        $usuario->apellido = 'Admin';
        $usuario->email = 'admin@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->nombre = 'Juanito';
        $usuario->apellido = 'PicaPiedra';
        $usuario->email = 'juan@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();
    }
}
