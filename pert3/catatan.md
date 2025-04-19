13.00 -18.00
 composer create-project --prefer-dist raugadh/fila-starter .
hapus data
rm -rf *
rm -rf .*

rubah .env dalam src
chown -R www-data:www-data storage/*
php artisan migrate
php artisan migrate:fresh
php artisan db:seed --force
php artisan shield:generate --all
php artisan project:init
chmod 777 -R storage/* && chmod 777 -R bootstrap/*
buat folder di dalam public
masukkan file tamplate semua kecuali htmlnya
buat folder components di dalam resource lalu buat file app.blade.php masukkan kode index.html tamplate 
toko buat beli 
digitalocean.com