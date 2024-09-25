<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $primaryKey = 'review_id';

    public function usuario(){
        return $this->belongsTo(User::class,'usuario_id','id');
    }

    public function curso(){
        return $this->belongsTo(Curso::class,'curso_id','curso_id');
    }
    
}
