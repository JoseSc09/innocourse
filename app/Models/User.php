<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'image',
        'first_name',
        'last_name',
        'username',
        'email',
        'password',
        'rol_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'rol_id', 'id');
    }

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn (string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Al recuperar, capitaliza la primera letra de la primera palabra
            set: fn (string $value) => strtolower($value), // Al guardar, convierte todo a minúsculas
        );
    }

}
