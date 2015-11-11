<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where all API routes are defined.
|
*/





Route::resource("customers", "CustomerAPIController");

Route::resource("workorders", "WorkorderAPIController");

Route::resource("dmrs", "DmrAPIController");