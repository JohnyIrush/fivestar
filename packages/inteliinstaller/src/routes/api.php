<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Inteliinstaller\app\Http\Controllers\InteliController;
use Softwarescares\Inteliinstaller\app\Http\Controllers\SchoolAdminController;
use Softwarescares\Inteliportal\app\Http\Controllers\School\SchoolController;
use Softwarescares\Inteliportal\app\Http\Controllers\SchoolEducationSystemController;
use Softwarescares\Inteliportal\app\Http\Controllers\SchoolGenderController;
use Softwarescares\Inteliportal\app\Http\Controllers\SchoolLevelController;
use Softwarescares\Inteliportal\app\Http\Controllers\SchoolTypesController;

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

Route::get('/school-types',[SchoolTypesController::class, 'index']);
Route::get('/school-levels',[SchoolLevelController::class, 'index']);
Route::get('/school-education-systems',[SchoolEducationSystemController::class, 'index']);
Route::get('/school-gender',[SchoolGenderController::class, 'index']);

// Products
Route::get('products',[InteliController::class, 'index'])->name("products");

Route::post('create-sch-account',[SchoolController::class, 'store'])->name('create-sch-account');
Route::post('register-sch-admin',[SchoolAdminController::class, 'store']);



// Installtion routes
Route::post('create-database',[InteliController::class, 'createDatabase']);
Route::post('configure-database',[InteliController::class, 'configureInteliDatabase']);
Route::post('run-database-migrations',[InteliController::class, 'runInteliMigration']);
Route::post('run-database-seeders',[InteliController::class, 'runInteliSeeder']);
