// vite.config.js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.scss', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    optimizeDeps: {
        include: ['swiper'], // Убедитесь, что Swiper оптимизирован для работы с Vite
    },
    build: {
        outDir: 'public/dist', // Путь для собранных файлов
        assetsDir: 'assets', // Подкаталог для ассетов
        manifest: true, // Включает создание манифеста
        rollupOptions: {
          input: '/resources/js/app.js' // Основной файл для сборки
        }
    }
});
