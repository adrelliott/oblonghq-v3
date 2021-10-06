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


// Testing routes
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/surveys', function() {
    return App\Models\Surveys\Survey::select('id', 'tenant_id', 'sections.name')
        ->with(['sections', 'sections.questions'])
        ->first();
});



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
