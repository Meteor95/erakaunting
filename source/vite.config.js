import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/app.css',
                'resources/assets/js/app.js',
                'resources/assets/js/app_admin.js'
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    build: {
        build: {
            outDir: 'public/build', 
            manifest: true,         
            emptyOutDir: true,   
        },
        rollupOptions: {
            input: {
                app_css: 'resources/assets/css/app.css',
                app_js: 'resources/assets/js/app.js',
                app_admin_js: 'resources/assets/js/app_admin.js'
            },
            output: {
                chunkFileNames: 'js/[name]-[hash].js',
                entryFileNames: 'js/[name]-[hash].js',
                assetFileNames: '[name]-[hash][extname]',
            },
        },
    },
});
