<?php

use Softwarescares\Intelitimetable\app\Http\Controllers\TermController;
use Softwarescares\Intelitimetable\app\Http\Controllers\DaySessionController;
use Softwarescares\Intelitimetable\app\Http\Controllers\TimetableController;
use Softwarescares\Intelitimetable\app\Http\Controllers\VenueController;
use Softwarescares\Intelitimetable\app\Http\Controllers\DayController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('timetable/day/index', [DayController::class, 'index']);
Route::get('timetable/day/create', [DayController::class, 'create']);
Route::post('timetable/day/update', [DayController::class, 'update']);
Route::post('timetable/day/store', [DayController::class, 'store']);
Route::post('timetable/day/destroy', [DayController::class, 'destroy']);

Route::get('timetable/day/session/index', [DaySessionController::class, 'index']);
Route::get('timetable/day/session/create', [DaySessionController::class, 'create']);
Route::post('timetable/day/session/update', [DaySessionController::class, 'update']);
Route::post('timetable/day/session/store', [DaySessionController::class, 'store']);
Route::post('timetable/day/session/destroy', [DaySessionController::class, 'destroy']);


Route::get('timetable/term/index', [TermController::class, 'index']);
Route::get('timetable/term/create', [TermController::class, 'create']);
Route::post('timetable/term/update', [TermController::class, 'update']);
Route::post('timetable/term/store', [TermController::class, 'store']);
Route::post('timetable/term/destroy', [TermController::class, 'destroy']);


Route::get('timetable/venue/index', [VenueController::class, 'index']);
Route::get('timetable/venue/create', [VenueController::class, 'create']);
Route::post('timetable/venue/update', [VenueController::class, 'update']);
Route::post('timetable/venue/store', [VenueController::class, 'store']);
Route::post('timetable/venue/destroy', [VenueController::class, 'destroy']);
