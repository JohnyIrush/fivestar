<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Inteliportal\app\Http\Controllers\CityController;
use Softwarescares\Inteliportal\app\Http\Controllers\GenderController;
use Softwarescares\Inteliportal\app\Http\Controllers\Guardian\GuardianController;
use Softwarescares\Inteliportal\app\Http\Controllers\PortalController;
use Softwarescares\Inteliportal\app\Http\Controllers\School\SchoolController;
use Softwarescares\Inteliportal\app\Http\Controllers\Students\StudentController;
use Softwarescares\Inteliportal\app\Http\Controllers\TownController;

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

Route::get("cities", [CityController::class, "index"]);
Route::get("towns", [TownController::class, "index"]);

Route::get("gender", [GenderController::class, "index"]);

Route::post("register-student",[StudentController::class, "store"]);
Route::post("register-guardian",[GuardianController::class, "store"]);

Route::post("register-portal",[PortalController::class, "store"]);


