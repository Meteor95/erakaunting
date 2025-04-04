import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import glob from 'fast-glob';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/assets/css/app.css',
                'resources/assets/js/app.js',
                'resources/assets/js/app_admin.js',
                'resources/eds/js/auth/app_auth.js',
                //...glob.sync('resources/eds/js/**/*.js'),
            ],
            refresh: true,
            buildDirectory: 'build',
        }),
    ],
    build: {
        outDir: 'public/build',
        manifest: true,
        emptyOutDir: true,
        rollupOptions: {
            input: {
                app_css: 'resources/assets/css/app.css',
                app_js: 'resources/assets/js/app.js',
                app_admin_js: 'resources/assets/js/app_admin.js',
                app_auth_js: 'resources/eds/js/auth/app_auth.js',
                // ...Object.fromEntries(
                //     glob.sync('resources/eds/js/**/*.js').map(file => [
                //         file.replace(/^resources\/eds\/js\//, 'eds_').replace(/\.js$/, ''), file
                //     ])
                // ),
            },
            output: {
                chunkFileNames: 'js/[name]-[hash].js',
                entryFileNames: 'js/[name]-[hash].js',
                assetFileNames: 'assets/[name]-[hash][extname]',
            },
        },
    },
    resolve: {
        alias: {
            '@images': '/resources/assets/images',
        },
    },
    server: {
        host: 'localhost',
        port: 12102,
    },
});