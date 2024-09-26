<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class About extends Model
{
    use HasFactory;

    protected $table = 'about';

    // Mutator para que solo la primera palabra tenga la primera letra en mayúsculas
    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn(string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }

    protected function text(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn(string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }
}
