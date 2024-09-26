<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses'; 


    // Relación con la tabla "users" (instructor -> usuario)
    public function instructor()
    {
        return $this->belongsTo(User::class, 'instructor_id', 'id');
    }

    // Relación con la tabla "categories"
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id'); 
    }

    // Relación de un curso con muchas reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'course_id', 'id'); 
    }
}