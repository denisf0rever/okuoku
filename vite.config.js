import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css', 'resources/scss/style.scss', 'resources/scss/dashboard/style.scss', 'resources/js/dashboard/app.js', 'resources/js/main.min.js'],
      refresh: true,
    }),
  ],
});
