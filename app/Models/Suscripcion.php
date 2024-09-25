<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Suscripcion extends Model
{
    protected $table = 'suscripciones';
    protected $fillable = [
        'num_cursos',
        'nombre_suscripcion',
        'duracion_meses',
        'precio',
        'num_cursos',
        'descripcion',
    ];
    protected $primaryKey = 'id_suscripcion';
}
