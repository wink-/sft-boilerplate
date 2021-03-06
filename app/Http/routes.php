<?php

/**
 * Switch between the included languages
 */
require(__DIR__ . "/Routes/Global/Lang.php");

/**
 * Frontend Routes
 * Namespaces indicate folder structure
 */
$router->group(['namespace' => 'Frontend'], function () use ($router)
{
	require(__DIR__ . "/Routes/Frontend/Frontend.php");
	require(__DIR__ . "/Routes/Frontend/Access.php");
});

/**
 * Backend Routes
 * Namespaces indicate folder structure
 */
$router->group(['namespace' => 'Backend'], function () use ($router)
{
	$router->group(['prefix' => 'admin', 'middleware' => 'auth'], function () use ($router)
	{
		/**
		 * These routes need view-backend permission (good if you want to allow more than one group in the backend, then limit the backend features by different roles or permissions)
		 *
		 * Note: Administrator has all permissions so you do not have to specify the administrator role everywhere.
		 */
		$router->group(['middleware' => 'access.routeNeedsPermission:view-backend'], function () use ($router)
		{
			require(__DIR__ . "/Routes/Backend/Dashboard.php");
			require(__DIR__ . "/Routes/Backend/Access.php");
		});
	});
});

/*
|--------------------------------------------------------------------------
| API routes
|--------------------------------------------------------------------------
*/

Route::group(['prefix' => 'api', 'namespace' => 'API'], function ()
{
	Route::group(['prefix' => 'v1'], function ()
	{
        require Config::get('generator.path_api_routes');
	});
});


Route::resource('customers', 'CustomerController');

Route::get('customers/{id}/delete', [
    'as' => 'customers.delete',
    'uses' => 'CustomerController@destroy',
]);


Route::resource('workorders', 'WorkorderController');

Route::get('workorders/{id}/delete', [
    'as' => 'workorders.delete',
    'uses' => 'WorkorderController@destroy',
]);


Route::resource('dmrs', 'DmrController');

Route::get('dmrs/{id}/delete', [
    'as' => 'dmrs.delete',
    'uses' => 'DmrController@destroy',
]);

Route::post('dmrs/stage', [ 
	'as' => 'dmrs.stage',
	'uses' => 'DmrController@createDmrFromWorkorder'
	]);