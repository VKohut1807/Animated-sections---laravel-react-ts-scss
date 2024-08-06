import { defineConfig } from 'vite';
import path from 'path';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

const filesStyle = [
    "resources/scss/global/global.scss",
    'resources/scss/layouts/home.scss',
    'resources/scss/layouts/section-1.scss',
    'resources/scss/layouts/section-2.scss',
    'resources/scss/layouts/section-3.scss',
    'resources/scss/layouts/section-4.scss',
    'resources/scss/layouts/section-5.scss',
    'resources/scss/layouts/section-6.scss',
    'resources/scss/layouts/section-7.scss',
    'resources/scss/layouts/section-8.scss',
    'resources/scss/layouts/section-9.scss',
    'resources/scss/layouts/section-10.scss',
    'resources/scss/layouts/section-11.scss',
    'resources/scss/layouts/section-12.scss',
    'resources/scss/layouts/section-13.scss',
];

const filesTsx = [
    'resources/tsx/home.tsx',
];

const filesTs = [
    'resources/ts/components/navigationDrawers.ts',
    'resources/ts/layouts/section-2.ts',
    'resources/ts/layouts/section-7.ts',
    'resources/ts/layouts/section-8.ts',
    'resources/ts/layouts/section-11.ts',
];

export default defineConfig({
    server: {
        hmr: {
            host: "localhost",
        },
    },
    plugins: [
        react(),
        laravel({
            input: [...filesStyle, ...filesTsx, ...filesTs],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, './resources'),
            '@scss': path.resolve(__dirname, './resources/scss'),
            '@svg': path.resolve(__dirname, './resources/svg'),
        },
    }
});
