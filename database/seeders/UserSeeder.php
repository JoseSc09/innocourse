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
        $user = new User();
        $user->image = 'storage/images/users/user_default.png'; 
        $user->first_name = 'jose'; 
        $user->last_name = 'calderon'; 
        $user->username = 'admin';
        $user->email = 'admin@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 1; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/instructor_carla_casas.jpg';
        $user->first_name = 'carla'; 
        $user->last_name = 'casas'; 
        $user->username = 'Carla_CasasH';
        $user->email = 'carla.c@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 2; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/instructor_andres_galicia.jpg';
        $user->first_name = 'andres'; 
        $user->last_name = 'galicia'; 
        $user->username = 'Andres_GaliciaC';
        $user->email = 'andres.g@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 2; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/instructor_luz_hernandez.jpg';
        $user->first_name = 'luz'; 
        $user->last_name = 'hernandez'; 
        $user->username = 'Luz_HernandezH';
        $user->email = 'luz.h@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 2; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/instructor_juan_maya.jpg';
        $user->first_name = 'juan'; 
        $user->last_name = 'maya'; 
        $user->username = 'Juan_MayaR';
        $user->email = 'juan.m@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 2; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/user_default.png';
        $user->first_name = 'carlos'; 
        $user->last_name = 'gomez'; 
        $user->username = 'Carlos_Gomez15';
        $user->email = 'carlos.g@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 3; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/user_default.png';
        $user->first_name = 'maria'; 
        $user->last_name = 'jimenez'; 
        $user->username = 'J.Maria200';
        $user->email = 'maria.j@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 3; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/user_default.png';
        $user->first_name = 'elena'; 
        $user->last_name = 'peralta'; 
        $user->username = 'E.Peralta78';
        $user->email = 'elena.p@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 3; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/user_default.png';
        $user->first_name = 'luis'; 
        $user->last_name = 'fernandez'; 
        $user->username = 'Luis.Fndz69';
        $user->email = 'luis.f@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 3; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/user_default.png';
        $user->first_name = 'ricardo'; 
        $user->last_name = 'tavares'; 
        $user->username = 'Ricardo.Tvrs35';
        $user->email = 'ricardo.t@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 3; 
        $user->save();

        $user = new User();
        $user->image = 'storage/images/users/user_default.png';
        $user->first_name = 'mario'; 
        $user->last_name = 'casas'; 
        $user->username = 'M.Casas45';
        $user->email = 'mario.c@mail.com';
        $user->password = bcrypt('123456789');
        $user->rol_id = 3; 
        $user->save();
    }
}
