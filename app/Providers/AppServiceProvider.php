<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Vite;

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
            // Si el archivo está en 'public/storage/imagenes', devuelve la URL pública
            if (Storage::disk('public')->exists($asset)) {
                return asset('storage/' . $asset);
            }
        
            // Si no está en 'storage', busca en 'resources/images' y usa Vite para manejarlo
            return $this->asset("resources/images/{$asset}");
        });
    }
}
