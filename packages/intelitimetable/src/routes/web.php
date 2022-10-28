<?php

use Softwarescares\Intelitimetable\app\Http\Controllers\UI\UIController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {

    $authMiddleware = config('jetstream.guard')
            ? 'auth:'.config('jetstream.guard')
            : 'auth';

    $authSessionMiddleware = config('jetstream.auth_session', false)
            ? config('jetstream.auth_session')
            : null;

    Route::group(['middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
        Route::get("timetable", [UIController::class,"timetable"])->name("timetable");
});
});

/**
 * Timetable submodule 
 * of Academic UI Routes
 * 
*/

//Route::get('/timetable', [TimetableController::class, 'timetable'])->name('timetable');
//Route::get('/tables', [TimetableController::class, 'tables'])->name('tables');
//Route::get('/tests', [TimetableController::class, 'tests'])->name('tests');
//Route::get('/sessions', [TimetableController::class, 'sessions'])->name('sessions');
//Route::get('/selectedVenues', [TimetableController::class, 'selectedVenues'])->name('selectedVenues');
//Route::get('/timetables', [TimetableController::class, 'timetables'])->name('timetables');

/**
 * Timetable generator plugin
*/

//Route::get('/lessons', [TimetableController::class, 'lessons'])->name('lessons');

/***
 * Timetable Variables
*/

//Route::get('/days', [DayController::class, 'days'])->name('days');
//Route::get('/daysession', [DaySessionController::class, 'daySession'])->name('daysession');
//Route::get('/venues', [VenueController::class, 'venues'])->name('venues');

