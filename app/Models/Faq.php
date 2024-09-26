<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Faq extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'answer',
    ];

    protected function question(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? $this->capitalizeAfterPunctuation($value) : $value,
            set: fn(?string $value) => $value ? strtolower($value) : $value,
        );
    }

    private function capitalizeAfterPunctuation(string $value): string
    {
        // Capitaliza la primera letra de la cadena, considerando signos de puntuación
        $value = preg_replace_callback('/([?¡¿.])\s*(\w)/u', function ($matches) {
            return $matches[1] . strtoupper($matches[2]);
        }, $value);

        // Capitaliza la primera letra de la cadena
        $value = ucfirst($value);

        // Elimina el espacio después de un signo de puntuación si existe
        $value = preg_replace('/([?¡¿.])\s+/', '$1 ', $value);

        return $value;
    }

    /**
     * Get and set the respuesta attribute.
     */
    protected function answer(): Attribute
    {
        return Attribute::make(
            get: fn(?string $value) => $value ? Str::ucfirst($value) : $value, // Usa Str::ucfirst en lugar de ucfirst
            set: fn(?string $value) => $value ? strtolower($value) : $value, // Verifica si el valor existe antes de aplicar strtolower
        );
    }
}
