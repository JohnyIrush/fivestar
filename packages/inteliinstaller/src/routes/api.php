<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Inteliinstaller\app\Http\Controllers\InteliController;
use Softwarescares\Inteliinstaller\app\Http\Controllers\School\SchoolController;
use Softwarescares\Inteliinstaller\app\Http\Controllers\SchoolAdminController;

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

// Products
Route::get('products',[InteliController::class, 'index'])->name("products");

Route::post('create-sch-account',[SchoolController::class, 'store'])->name('create-sch-account');
Route::post('register-sch-admin',[SchoolAdminController::class, 'store']);



// Installtion routes
Route::post('create-database',[InteliController::class, 'createDatabase']);
Route::post('configure-database',[InteliController::class, 'configureInteliDatabase']);
Route::post('run-database-migrations',[InteliController::class, 'runInteliMigration']);
Route::post('run-database-seeders',[InteliController::class, 'runInteliSeeder']);
