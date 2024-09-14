<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Vite;
use Illuminate\Support\Facades\URL;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Vite::macro('image', function (string $asset) {
            // Si el archivo está en 'public/storage', devuelve la URL pública
            if (Storage::disk('public')->exists($asset)) {
                return URL::to('storage/' . $asset);
            }
        
            // Si el archivo no está en 'storage', se considera que está en 'resources/images'
            // Vite normalmente maneja archivos en 'public', no directamente en 'resources'
            // Asegúrate de que los archivos están en 'public' o que están bien manejados por Vite
            return Vite::asset("resources/images/{$asset}");
        });
    }
}
