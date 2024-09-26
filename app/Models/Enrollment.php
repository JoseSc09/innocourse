<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $table = 'enrollments';

    protected $fillable = [
        'user_id',
        'course_id',
    ];

    // Relación con la tabla "users"
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Relación con la tabla "courses"
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

}