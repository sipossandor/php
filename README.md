<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
PHP
composer create-project laravel/laravel project_name –prefer-dist  
Visual Studio Code – Add Folder to  Workspace  
composer create-project laravel/laravel DirectoryName  
node-v1.8.7.0-x64.msi install  
cd directoryName  
php artisan serve  
Migráció, tábla készítése   php artisan make:migration create_táblanév_table  
Elkészített tábla szerkezet migrációja  php artisan migrate  
Modell létrehozása php artisan make:model modelnév     
Kontroller létrehozása php artisan make:controller controllernév  
composer create-project laravel/laravel="9.1.10" laravel_projekt_neve  
cd laravel_projekt  
composer require laravel/breeze="1.9.2" --dev  
php artisan breeze:install  
npm install --save-dev vue vue-axios vue-loader vue-router vue-template-compiler axios  
npm install  
npm run dev  
php artisan key:generate  
php artisan migrate  
php artisan serve  
npm run watch  
Laravel projekt klónozása github-ról  
- githubon kimásolni az adott repo elérési címét  
	github-n a reponál zöld gomb lenyitása,   
	és az elérési út mellett másolás ikon  
- a gépen nyitni egy CMD-t, és belépni a htdocs mappába:  
	cd C:\xampp\htdocs  
- git clone ide-illeszteni-a-repo-címét  
- belépni a létrejött mappába:  
	cd ide-a-létrejött-mappa-elérési-útja  
- composer install  
- megnyitni az új projektet a phpstorm-ban:  
	a fájlkezelőben a baloldalon jobb katt. a projektre...  
- létrehozni a .env fájlt:  
	projekt nevére jobb katt./új fájl létrehozása,  
	neve: .env  
	(a pont is kell az env elé!)  
- .env.example másolása:  
	a projektben a .env.example-t megnyitni,   
	belekatt és Ctrl+A, majd Ctrl+C  
- a létrehozott .env fájlba beillesztés:  
	Ctrl+V  
- kulcs generálás:  
	nyitni egy terminált, és  
	php artisan key:generate  
- npm install  
- npm run dev  
- php artisan serve  
Adatbázissal kapcsolatos beállítások  
- XAMPP panelen MySql-t elindítani  
- HeidiSql-t megnyitni  
- Ellenőrizni a MySql adatbázist (gyakran hibás, és ki kell javítani!):  
	bal oldalon kiválasztani a mysql.db-t  
	jobb oldalon belekatt, és Ctrl+A  
	fenti menüsorból: Eszközök/karbantartás/check/futtatás  
- Ha van hiba, akkor azokat az adattáblákat kiválasztani, majd:  
	fenti menüsorból: karbantartás/repair/futtatás  
- Új adatbázis létrehozása:  
	unnamed-re katt.  
	jobb katt./új adatbázis  
	nevet adni   
- Felhasználók kezelése (fenti sorban ikon: 2ember):  
	Hozzáadás (zöld gomb)  
	megadni a felh.név, jelszót  
	pipa az adatbázis nevénél  
	mentés, bezárás  
Vissza a phpstormba!  
- beírni az adatbázis nevét, a felhasználót, a jelszót a .env fájl megfelelő részére  
- terminálon:    
	php artisan migrate  
- Heidi-ben frissítés, és megjelennek a laraveles táblák az adatbázisban  
php artisan make:migration create_challenges_table   
php artisan make:migration create_activities_table   
php artisan make:migration create_experiences_table   
php artisan make:migration create_images_table   
php artisan make:migration create_regions_table  
php artisan make:migration create_jobopenings_table   
php artisan make:migration create_applications_table  
php artisan make:migration create_managers_table  
php artisan migrate   
php artisan make:seeder UserSeeder  
php artisan db:seed  
php artisan make:model ModelNeve  
php artisan migrate:refresh  
composer require orangehill/iseed  
php artisan iseed table_name  
php artisan make:migration alter_users_table  
php artisan make:seeder ApplicationsTableSeeder  
php artisan make:seeder JobOpeningsTableSeeder  
php artisan make:seeder UsersTableSeeder  
Laravel User Interface  
composer require laravel/ui  
Console App (.net Framework)   Konzol alkalmazás  
GUI  
WPF App(.NetFrameWork)  
Ha nem kell Breeze akkor composer install  
php artisan make:migration create:név_table  
Project>Routes>api.php   itt use App\Http\Controllers\BooksController;  
		Route::get(’books’, [BooksController::class, ’list’]);     
Project>app>http>Controllers>BooksController.php  
		public function list()  
			{ 
			   $books = Books::all();  
			   return [  
					„status” => ’OK’,  
					„data” => $books,  
					„msg” => „Books listed succesfuly”  
					„fuggveny_nev” =>”list()”  
				     ];  
}  
Listázás   localhost:8000/api/books  
Postman  
	New Collection – Pre-request Script – Add Request – Save - Export	      

