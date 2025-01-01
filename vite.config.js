import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({

    plugins: [
        laravel({
            input: [
                'resources/css/app.css', // Main CSS
                'resources/js/app.js',   // Default JavaScript
                'resources/js/comments.js', // Add your comments.js here
                'resources/js/forum.js',
            ],
            refresh: true,
        }),
    ],
});
