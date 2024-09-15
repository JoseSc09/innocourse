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
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'Jose';
        $usuario->apellido = 'Calderon';
        $usuario->email = 'jose.calderon@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 1;
        $usuario->save();


        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_carla_casas.jpg';
        $usuario->nombre = 'Carla';
        $usuario->apellido = 'Casas';
        $usuario->email = 'carla.c@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_andres_galicia.jpg';
        $usuario->nombre = 'Andres';
        $usuario->apellido = 'Galicia';
        $usuario->email = 'andres.g@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_luz_hernandez.jpg';
        $usuario->nombre = 'Luz';
        $usuario->apellido = 'Hernandez';
        $usuario->email = 'luz.h@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_juan_maya.jpg';
        $usuario->nombre = 'Juan';
        $usuario->apellido = 'Maya';
        $usuario->email = 'juan.m@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();
    }
}
