import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import dotenv from 'dotenv';

dotenv.config();

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/scss/app.scss','resources/js/room.js'],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['bootstrap', '@popperjs/core'],
    },
    define: {
        'process.env.APP_ENV': JSON.stringify(process.env.APP_ENV),
        'process.env.APP_URL': JSON.stringify(process.env.APP_URL),
    },
    build: {
        target: 'esnext', // Itt az 'esnext' lehetőséggel támogathatod a top-level awaitet
    },
});