<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function() {
	return view('surveys.public.homepage');
})->name('surveys.homepage');

Route::get('/ask/survey-missing', function() {
    return view('surveys.errors.survey-missing');
})->name('surveys.survey-missing');

Route::get('/ask/link-invalid', function() {
    return view('surveys.errors.link-invalid');
})->name('surveys.link-invalid');

Route::get('/ask/survey-closed', function() {
    return view('surveys.errors.survey-closed');
})->name('surveys.survey-closed');

// Route::group([
//     'middleware' => ['signed'],
//     'prefix' => 'ask',
// ], function() {
//     Route::get('/{invitation}', [App\Http\Controllers\Scoped\InvitationsController::class, 'show'])
//         ->name('ask.start')
//         ->missing(function (Request $request) {
//             return Redirect::route('surveys.survey-missing');
//         });
// });
