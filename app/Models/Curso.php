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
        return $this->belongsTo(User::class, 'instructor_id', 'id');
    }

    // Relación con la tabla "categorias"
    public function categoria(){
        return $this->belongsTo(Categoria::class,'categoria_id','categoria_id');
    }

    // Relación de un curso con muchas reviews
    public function reviews()
    {
        return $this->hasMany(Review::class,'curso_id','curso_id');
    }
}
