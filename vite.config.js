import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/format.css', 'resources/js/app.js'], // Pastikan ini sesuai dengan struktur Anda
            refresh: true,
        }),
    ],
    build: {
        outDir: 'public/dist', // Sesuaikan output jika diperlukan
    },
});
