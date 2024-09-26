<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Lesson extends Model
{
    use HasFactory;

    protected $table = 'lessons';

    protected $fillable = [
        'lesson_name',
        'content',
        'section_id',
    ];

    // Relación con la tabla "sections"
    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id', 'id');
    }

    protected function lessonName(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn(string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }

}
