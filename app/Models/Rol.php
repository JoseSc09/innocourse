<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    use HasFactory;
    protected $table = 'rols';

    protected $fillable = [
        'rol_name',
    ];

    public function getRouteKeyName()
    {
        return 'rol_name';
    }
}
