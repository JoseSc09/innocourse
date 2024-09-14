<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = 'cursos';

    public function instructor(){
        return $this->hasOne(Usuario::class,'instructor_id','usuario_id');
    }

    public function categoria(){
        return $this->hasOne(Categoria::class,'categoria_id','categoria_id');
    }
}
