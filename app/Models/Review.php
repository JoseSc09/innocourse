<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Review extends Model
{
    use HasFactory;

    protected $table = 'reviews';

    protected $fillable = [
        'course_id',
        'user_id',
        'rating',
        'comment',
    ];

    // Relación con la tabla "courses"
    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    // Relación con la tabla "users"
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    protected function comment(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn(string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }

}
