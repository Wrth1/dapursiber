cara start:

1. bikin .env pake .env.example
2. run `php artisan migrate:fresh`
3. run `php artisan db:seed --class=DatabaseSeeder`, ini buat bikin user dummy
4. (optional) kalau malas run 3 3 nya, bisa run `php artisan migrate:fresh --seed`
5. ke laravel herd -> link existing project, pilih folder ini
6. enjoy http://dapursiber.test