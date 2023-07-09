# Assignment

K PHP jsem se vrátil v tomtu úkolu po delší době, musím přiznat, že jsem musel strávit nějakou chvíli, abych si oživil syntax. Úplně nejsem s výsledkem spokojen, nicméně nelze to dělat měsíc :smiley: , tudíž doufám, že to splňuje požadavky na MVP :smile:

## PHP framework - Laravel

App jsem si nastavil na virtuální adrese: assigment.test a připojil dostupnou databázi phpMyAdmin (lokální Apache server přes XAMPP)

App obsahuje základní features: registraci uživatele, také následný login, čtení z dat, mazání úživatelů

Prvně jsem plánoval pro front-end použít také React s nějakým hezčím stylingem, nicméně kvůli času jsem od toho záměru opustil, a tak řešení je pouze php + html a pár řádků css.

Rozhodl jsem se také udělat pro ukázku dvě řešení, kdy práce s daty v rámci appky z pohledu uživatele je řešena v jednom controlleru a oddělené API v jiném controlleru, které jsou otevřené a lze se na ně napojit. CRUD operace testovány v POSTMANOVi.

## DTB

pro rychlou přípravu DTB použity ,,helpers,, v rámci Laravelu -> php artisan
Migrations
Seeders
[dump file] (app\assignment.sql)

## Packages

Larevel už sam o sobě obsahuje množství balíčků, ale ne s všemi mám zkušenost

### Fortify

pro snadné založení/registraci nového uživatele
obsahuje základní validační metody pro každý input a hash passwordu

Sanctum pro authentifikaci, ale prakticky jsem ho ani nepoužil
Pro API jsem si vystačil bez použití nějakého balíčku, i když jsem uvažoval např. o Restify, ale to bych musel vzít více času nastudovat dokumentaci

## API

\Controllers\Api\UsersController
obsahuje endpointy, které vrací požadované data z databáze
[Odkaz na soubor](app\Http\Controllers\Api\UsersController.php)
