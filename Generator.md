##How to use the Mitul Generator

Generate scaffold and api from table. **Do not use the migrations**
    php artisan mitul.generator:scaffold_api Post --fromTable --tableName=posts --skipMigration

In the model, if using something other than id as primary key, import the following after the namespace
```
use Sofa\Eloquence\Mappable; // extension trait
use Sofa\Eloquence\Eloquence; // base trait
```
In the model add protected $primaryKey = 'WhatEverMyPrimaryKeyColumnIs';
In the model add protected $maps = ['id' = > 'WhatEverMyPrimaryKeyColumnIs'];
In the model, remove the primaryKey, created\_at, and updated\_at from the $fillable array

In views, replace @extends('app') with @extends('frontend.layouts.master')
In frontend.$route.edit, replace the id with the proper primary key
In frontend.$route.edit, replace @include('$route.table') with @include('frontend.$route.table')
In frontend.$route.create, replace @include('$route.fields') with @include('frontend.$route.fields')
In frontend.$route.index, replace @include('$route.table') with @include('frontend.$route.table')

In the App\Repositories\Frontend directory, make a directory with your Model name.
Move the $ModelNameRepository.php from the App\Repositories\Frontend directory to the App\Repositories\Frontend\$ModelName directory.
In the $ModelNameRepository.php, update the namespace. App\Repositories\Frontend\$ModelName

In controller, replace App\Repositories\Frontend\$ModelNameRepository; with App\Repositories\Frontend\$ModelName\$ModelNameRepository;
In controller, update the return(view('file.php')) to return(view('frontend.file.php'))

In API/$ModelNameApiController.php replace  App\Repositories\Frontend\$ModelNameRepository; with App\Repositories\Frontend\$ModelName\$ModelNameRepository;