<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'jose';
        $usuario->apellido = 'calderon';
        $usuario->username = 'admin';
        $usuario->email = 'admin@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 1;
        $usuario->save();


        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/instructor_carla_casas.jpg';
        $usuario->nombre = 'carla';
        $usuario->apellido = 'casas';
        $usuario->username = 'Carla_CasasH';
        $usuario->email = 'carla.c@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/instructor_andres_galicia.jpg';
        $usuario->nombre = 'andres';
        $usuario->apellido = 'galicia';
        $usuario->username = 'Andres_GaliciaC';
        $usuario->email = 'andres.g@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/instructor_luz_hernandez.jpg';
        $usuario->nombre = 'luz';
        $usuario->apellido = 'hernandez';
        $usuario->username = 'Luz_HernandezH';
        $usuario->email = 'luz.h@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/instructor_juan_maya.jpg';
        $usuario->nombre = 'juan';
        $usuario->apellido = 'maya';
        $usuario->username = 'Juan_MayaR';
        $usuario->email = 'juan.m@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 2;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'carlos';
        $usuario->apellido = 'gomez';
        $usuario->username = 'Carlos_Gomez15';
        $usuario->email = 'carlos.g@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'maria';
        $usuario->apellido = 'jimenez';
        $usuario->username = 'J.Maria200';
        $usuario->email = 'maria.j@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'elena';
        $usuario->apellido = 'peralta';
        $usuario->username = 'E.Peralta78';
        $usuario->email = 'elena.p@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'luis';
        $usuario->apellido = 'fernandez';
        $usuario->username = 'Luis.Fndz69';
        $usuario->email = 'luis.f@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'ricardo';
        $usuario->apellido = 'tavares';
        $usuario->username = 'Ricardo.Tvrs35';
        $usuario->email = 'ricardo.t@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();

        $usuario = new User();
        $usuario->imagen = 'storage/images/usuarios/user_default.png';
        $usuario->nombre = 'mario';
        $usuario->apellido = 'casas';
        $usuario->username = 'M.Casas45';
        $usuario->email = 'mario.c@mail.com';
        $usuario->password = bcrypt('123456789');
        $usuario->rol_id= 3;
        $usuario->save();
    }
}
