import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';  // Import the vue plugin here
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: ['resources/css/app.css','resources/js/app.js'],
            refresh: true,  
        }),
    ],
    resolve: {
        alias: {
            '@': '/resources/js',
        },
    },
});

