# Installation:
## Package [laravel-5-boilerplate](https://github.com/rappasoft/laravel-5-boilerplate)
Some boiler plate to get started with users and roles.

- `composer install`
- `npm install`
- Create .env file (example included)
- `php artisan key:generate`
- `php artisan migrate`
- Set administrator info in UserTableSeeder.php
- `php artisan db:seed`
- run `gulp` or `gulp watch` (Install gulp (sudo npm install -g gulp) if needed)

## Package [Eloquence](https://github.com/jarektkaczyk/eloquence)
Extends eloquent. Since we have non-standard table column names to work with, this will allow us to map them.
**Check the [documentation](https://github.com/jarektkaczyk/eloquence/wiki) for installation and usage info, [website](http://softonsofa.com/tag/eloquence/) for examples and [API reference](http://jarektkaczyk.github.io/eloquence-api)**

1. Require the package in your `composer.json`:
    ```
        "require": {
            ...
            "sofa/eloquence": "~5.1@dev", // for Laravel 5.1+
    ``` 
2. Add `Eloquence` trait to the model - it's entry point for other extensions and is required for them to work.
3. Add other traits, that you want to use.
4. Add `Sofa\Eloquence\ServiceProvider` to your `config/app.php` providers array - it will register the `Mutator` as a service in the IoC Container as well as factories on the `Builder` class.

## Package [laravel-api-generator](https://github.com/mitulgolakiya/laravel-api-generator)
### Installation

1. Add this package to your composer.json:
  
        "repositories": [
            {
                "type": "git",
                "url": "https://github.com/mitulgolakiya/laracast-flash"
            }
        ],
        "require": {
            "laracasts/flash": "dev-master",
            "laravelcollective/html": "5.1.*@dev",
            "bosnadev/repositories": "dev-master",
            "mitulgolakiya/laravel-api-generator": "dev-master"
        }
  
2. Run composer update

        composer update
    
3. Add the ServiceProviders to the providers array in ```config/app.php```.<br>
   As we are using these two packages [laravelcollective/html](https://github.com/LaravelCollective/html) & [laracasts/flash](https://github.com/laracasts/flash) as a dependency.<br>
   so we need to add those ServiceProviders as well.

		Collective\Html\HtmlServiceProvider::class,
		Laracasts\Flash\FlashServiceProvider::class,
		Mitul\Generator\GeneratorServiceProvider::class,
        
   Also for convenience, add these facades in alias array in ```config/app.php```.

		'Form'      => Collective\Html\FormFacade::class,
		'Html'      => Collective\Html\HtmlFacade::class,
		'Flash'     => Laracasts\Flash\Flash::class

### Configuration

Publish Configuration file ```generator.php```.

        php artisan vendor:publish --provider="Mitul\Generator\GeneratorServiceProvider"
        
Config file (```config/generator.php```) contains path for all generated files


### Publish & Initialization

Mainly, we need to do three basic things to get started.
1. Publish some common views like ```errors.blade.php``` & ```paginate.blade.php```.
2. Publish ```api_routes.php``` which will contain all our api routes.
3. Init ```routes.php``` for api routes. We need to include ```api_routes.php``` into main ```routes.php```.

        php artisan mitul.generator:publish

### Generator

Fire artisan command to generate API, Scaffold with CRUD views or both API as well as CRUD views.

Generate API:

        php artisan mitul.generator:api ModelName
    
Generate CRUD Scaffold:
 
        php artisan mitul.generator:scaffold ModelName
        
Generate CRUD Scaffold with API:
        
        php artisan mitul.generator:scaffold_api ModelName
        
e.g.
    
    php artisan mitul.generator:api Project
    php artisan mitul.generator:api Post

    php artisan mitul.generator:scaffold Project
    php artisan mitul.generator:scaffold Post

    php artisan mitul.generator:scaffold_api Project
    php artisan mitul.generator:scaffold_api Post

Generate scaffold and api from table. **Do not use the migrations**
    php artisan mitul.generator:scaffold_api Post --fromTable --tableName=posts --skipMigration
Here is the sample [fields input json](https://github.com/mitulgolakiya/laravel-api-generator/blob/master/samples/fields.json)
