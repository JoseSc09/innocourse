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
        $usuario->username = 'admin';
        $usuario->email = 'jose.calderon@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 1;
        $usuario->save();


        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_carla_casas.jpg';
        $usuario->nombre = 'Carla';
        $usuario->apellido = 'Casas';
        $usuario->username = 'Carla_CasasH';
        $usuario->email = 'carla.c@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_andres_galicia.jpg';
        $usuario->nombre = 'Andres';
        $usuario->apellido = 'Galicia';
        $usuario->username = 'Andres_GaliciaC';
        $usuario->email = 'andres.g@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_luz_hernandez.jpg';
        $usuario->nombre = 'Luz';
        $usuario->apellido = 'Hernandez';
        $usuario->username = 'Luz_HernandezH';
        $usuario->email = 'luz.h@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/instructor_juan_maya.jpg';
        $usuario->nombre = 'Juan';
        $usuario->apellido = 'Maya';
        $usuario->username = 'Juan_MayaR';
        $usuario->email = 'juan.m@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'Carlos';
        $usuario->apellido = 'Gomez';
        $usuario->username = 'Carlos_Gomez15';
        $usuario->email = 'carlos.g@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'Maria';
        $usuario->apellido = 'Jimenez';
        $usuario->username = 'J.Maria200';
        $usuario->email = 'maria.j@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'Elena';
        $usuario->apellido = 'Peralta';
        $usuario->username = 'E.Peralta78';
        $usuario->email = 'elena.p@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'Luis';
        $usuario->apellido = 'Fernandez';
        $usuario->username = 'Luis.Fndz69';
        $usuario->email = 'luis.f@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'Ricardo';
        $usuario->apellido = 'Tavares';
        $usuario->username = 'Ricardo.Tvrs35';
        $usuario->email = 'ricardo.t@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new Usuario();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'Mario';
        $usuario->apellido = 'Casas';
        $usuario->username = 'M.Casas45';
        $usuario->email = 'mario.c@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();
    }
}
