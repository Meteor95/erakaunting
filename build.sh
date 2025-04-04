#!/bin/bash
cd source

echo "Menghapus folder build lama..."
rm -rf public/build

echo "Memulai proses build..."
npm run build

if [ $? -eq 0 ]; then
  echo "Build selesai, memindahkan manifest.json..."
  mv public/build/.vite/manifest.json public/build/

  echo "Memulai Octane..."
  php artisan octane:start --port=12101 --watch
else
  echo "Build gagal, menghentikan script."
  exit 1
fi