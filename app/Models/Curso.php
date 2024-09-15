<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    // Relación con la tabla "usuarios" (instructor -> usuario)
    public function instructor()
    {
        return $this->belongsTo(Usuario::class, 'instructor_id', 'usuario_id');
    }

    // Relación con la tabla "categorias"
    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id','categoria_id');
    }
}
