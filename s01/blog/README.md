## Laravel start project
- `composer create-project prefer-dist laravel/laravel blog`
- `cd blog`
- `cp .env.example .env`
- `composer install`
- `php artisan key:generate`
- update .env file (database connection)
- `php artisan serve`
- `php artisan migrate`
### Create Route
- Go to `routes/web.php`
- to create route to home page with `/` uri => `Route::get('/', 'App\Http\Controllers\PageController@index')`
### Create Controller 
- `php artisan make:controller PageController`
