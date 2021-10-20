<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route:: get('/', function() {
    return 'This is app';
});

Route:: get('/dashboard', function() {
    return 'This is app dashboard';
});

