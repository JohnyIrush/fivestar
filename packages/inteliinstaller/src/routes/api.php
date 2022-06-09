<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('create/sch/account',[SchoolController::class, 'store'])->name('create-sch-account');
Route::post('register-sch-admin',[SchoolAdminController::class, 'store']);
