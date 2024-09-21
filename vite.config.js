import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js', // Archivo principal
                'resources/js/admin.js', // Archivo para administración
            ],
            refresh: true,
        }),
    ],
});