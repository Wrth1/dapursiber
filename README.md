cara start:

1. bikin .env pake .env.example
2. run `composer install`
3. run `npm install`
4. run `php artisan migrate:fresh`
5. run `php artisan db:seed --class=DatabaseSeeder`, ini buat isi roles nya
6. (optional) kalau malas run 3 3 nya, bisa run `php artisan migrate:fresh --seed`
7. ke laravel herd -> link existing project, pilih folder ini
8. di terminal di folder ini, run `npm run dev`
9. enjoy http://dapursiber.test