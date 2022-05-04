<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Softwarescares\Inteliinstaller\app\Http\Controllers\Installer\InstallerController;
use Softwarescares\Inteliinstaller\app\Http\Controllers\SchoolTypesController;
use Softwarescares\Inteliinstaller\app\Http\Controllers\SchoolLevelController;
use Softwarescares\Inteliinstaller\app\Http\Controllers\SchoolEducationSystemController;
use Softwarescares\Inteliinstaller\app\Http\Controllers\SchoolGenderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/installer',[InstallerController::class, 'installer'])->name('installer');

Route::get('/school-types',[SchoolTypesController::class, 'index']);
Route::get('/school-levels',[SchoolLevelController::class, 'index']);
Route::get('/school-education-systems',[SchoolEducationSystemController::class, 'index']);
Route::get('/school-gender',[SchoolGenderController::class, 'index']);
