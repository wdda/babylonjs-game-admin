import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue'
import vitePluginRequire from "vite-plugin-require"

export default defineConfig({
    resolve: {
        alias: {
            'vue': 'vue/dist/vue.esm-bundler.js'
        }
    },
    plugins: [
        vue(),
        vitePluginRequire(),
        laravel({
            input: [
                'resources/auth/css/app.css',
                'resources/auth/js/app.js',
                'resources/js/app.js',
                'resources/css/sass/app.sass',
            ],
            refresh: true,
        }),
    ],
});
