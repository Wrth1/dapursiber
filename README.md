cara start:

1. bikin .env pake .env.example
2. run `php artisan migrate:fresh`
3. run `php artisan db:seed --class=RoleSeeder`
4. run `php artisan db:seed --class=DatabaseSeeder`, ini buat bikin user dummy
5. (optional) kalau malas run 3 3 nya, bisa run `php artisan migrate:fresh --seed`
6. ke laravel herd -> link existing project, pilih folder ini
7. enjoy http://dapursiber.test