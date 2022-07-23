<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Inteliportal\app\Http\Controllers\Guardian\GuardianController;
use Softwarescares\Inteliportal\app\Http\Controllers\School\SchoolController;
use Softwarescares\Inteliportal\app\Http\Controllers\Students\StudentController;

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


Route::get("/portal/student/details", [StudentController::class, "getDetails"]);
Route::get("/portal/guardian/details", [GuardianController::class, "getDetails"]);
Route::get("/portal/school/details", [SchoolController::class, "getDetails"]);

