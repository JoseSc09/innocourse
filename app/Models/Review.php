<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    public function usuario(){
        return $this->belongsTo(Usuario::class,'usuario_id','usuario_id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class,'curso_id','curso_id');
    }
    
}
