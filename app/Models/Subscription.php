<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Subscription extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_count',
        'subscription_name',
        'price',
        'duration_months',
        'description',
    ];

    protected function subscriptionName(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn(string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }

    protected function description(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn(string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }

}
