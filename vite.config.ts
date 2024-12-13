import { defineConfig } from 'vite';
import react from '@vitejs/plugin-react';
import laravel from 'laravel-vite-plugin';
import path from 'path';

// https://vitejs.dev/config/
export default defineConfig({
  plugins: [
      laravel({
      input: 'resources/js/app.tsx',    // jsx のエントリポイントを記述
      refresh: true,
      }),
    react()],
  resolve: {
    alias: {
      '@': path.resolve(__dirname, 'resources/js'),
    },
  },
  server: {
    host: '0.0.0.0', 
    port:5173,
    proxy: {
      '/app': {
        target: 'http://localhost', // Laravelが動作しているサーバー
        changeOrigin: true,
      }
    },
  },
});
