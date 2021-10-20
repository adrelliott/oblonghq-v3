<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function() {
	return 'This is Outreach';
});

Route::get('/dashboard', function() {
	return 'This is Outreach Dashboard';
});
