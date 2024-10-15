import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import react from '@vitejs/plugin-react';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss', // ถ้ามีไฟล์ SCSS
                'resources/js/app.js',      // ไฟล์ JavaScript หลัก
                'resources/js/women.js'     // ไฟล์ JavaScript สำหรับ Women
            ],
            refresh: true,
        }),
        react(), // ใช้ React plugin
    ],
});
