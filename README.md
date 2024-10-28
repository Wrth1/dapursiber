cara start:

1. bikin .env pake .env.example
2. run `composer install`
3. run `npm install`
4. run `php artisan migrate:fresh`, kalau baru pertama kali, hilangin :fresh nya
5. run `php artisan db:seed --class=RolesSeeder`, ini buat isi roles nya, wajib
6. (optional) run `php artisan db:seed --class=DummySeeder`, ini buat isi data dummy
7. (optional) kalau malas run 3 3 nya, bisa run `php artisan migrate:fresh --seed`
8. ke laravel herd -> link existing project, pilih folder ini
9. di terminal di folder ini, run `npm run dev`
10. enjoy http://dapursiber.test

Creds:

user:
```
User X
password
```

consultant:
```
Consultant Y
password
```

admin:
```
Admin Z
password
```
