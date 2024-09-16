<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Suscripcion; 

class SuscripcionSeeder extends Seeder
{
     /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $suscripcion = new Suscripcion();
        $suscripcion->id_suscripcion = 1;
        $suscripcion->num_cursos = 1;
        $suscripcion->nombre_suscripcion = 'Pruebita';
        $suscripcion->precio = 70.00;
        $suscripcion->duracion_meses = 4;
        $suscripcion->descripcion = 'Se parte del curso y aprende muchos fundamentos claves para tu vida profesional!';
        $suscripcion->save();

        $suscripcion = new Suscripcion();
        $suscripcion->id_suscripcion = 2;
        $suscripcion->num_cursos = 2;
        $suscripcion->nombre_suscripcion = 'Achorado';
        $suscripcion->precio = 125.00;
        $suscripcion->duracion_meses = 4;
        $suscripcion->descripcion = 'Se parte del curso y aprende muchos fundamentos claves para tu vida profesional!';
        $suscripcion->save();

        $suscripcion = new Suscripcion();
        $suscripcion->id_suscripcion = 3;
        $suscripcion->num_cursos = 3;
        $suscripcion->nombre_suscripcion = 'Opulencia';
        $suscripcion->precio = 180.00;
        $suscripcion->duracion_meses = 4;
        $suscripcion->descripcion = 'Se parte del curso y aprende muchos fundamentos claves para tu vida profesional!';
        $suscripcion->save();
    }
}
