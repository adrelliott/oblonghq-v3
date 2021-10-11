<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/
Route::get('/', function() {
	return view('surveys.public.homepage');
})->name('public.surveys.homepage');

Route::get('/ask', function() {
    return view('surveys.public.start');
})->name('public.surveys.start');

Route::get('/ask/survey-missing', function() {
    return view('surveys.errors.survey-missing');
})->name('public.surveys.survey-missing');

Route::get('/ask/link-invalid', function() {
    return view('surveys.errors.link-invalid');
})->name('public.surveys.link-invalid');

Route::get('/ask/survey-closed', function() {
    return view('surveys.errors.survey-closed');
})->name('public.surveys.survey-closed');


// Testing routes
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/surveys', function() {
    return App\Models\Surveys\Survey::select('id', 'tenant_id')
        ->with(['sections', 'sections.questions'])
        ->first();
});



/*
|--------------------------------------------------------------------------
| Logged-in Users Routes
|--------------------------------------------------------------------------
*/

// CRUD for Surveys
Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'app',
    'as' => 'app.surveys.',
], function () {

    Route::get('/surveys', \App\Http\Livewire\Surveys\SurveyIndex::class)->name('index');
    Route::get('/surveys/{survey}', \App\Http\Livewire\Surveys\SurveyShow::class)->name('show');

});

// CRUD for sections (scoped to a survey)
Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'app',
    'as' => 'app.sections.',
], function () {

    Route::get('/surveys/{survey}/sections', \App\Http\Livewire\Surveys\QuestionIndex::class)->name('index');
    Route::get('/surveys/{survey}/sections/{section}', \App\Http\Livewire\Surveys\SurveyShow::class)->name('show');

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
