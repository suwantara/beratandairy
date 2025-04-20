import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/bootstrap.scss', // Tambahkan file SCSS Anda di sini
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
});
