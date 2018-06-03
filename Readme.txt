1. First of all install laravel
2. Then install laravel datatables via composer as
 	composer require yajra/laravel-datatables:^1.o
3. Open the file config/app.php and make following changes in providers
	'providers'=>
	[
	Yajra\Datatables\DatatableServiceProvider::class,
	]
	Also make change in aliases as
	'aliases'=>
	[
	'Datatables'=>Yajra\Datatables\Datatables::class,
	]

4. Publish configuration and assets 
	php artisan vendor::publish --tag-datatables