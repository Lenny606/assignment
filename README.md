## Assignment

použitý framework - Laravel
app na virtuální adrese: assigment.test , port: 127.0.0.1:80

připojená dtb - local phpMyAdmin, port: 127.0.0.1

pro přípravu DTB použity helpers v rámci Laravelu -> php artisan cmds
Migrations
Seeders

Package Fortify
pro založení/registraci nového uživatele
základní validační metody pro každý input
hash passwordu

## API BackEnd

\Controllers\Api\UsersController
obsahuje endpointy, které vrací požadované data z databáze
[Odkaz na soubor](app\Http\Controllers\Api\UsersController.php)

## FrontEnd

pouze základ v html bez stylesheetu
views používají principy MVC
Založení uživatele přes form , login
