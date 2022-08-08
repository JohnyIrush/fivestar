<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Intelistaff\app\Http\Controllers\CategoryController;
use Softwarescares\Intelistaff\app\Http\Controllers\DepartmentController;
use Softwarescares\Intelistaff\app\Http\Controllers\OccupationController;
use Softwarescares\Intelistaff\app\Http\Controllers\StaffController;


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

Route::get("/portal/staff/details", [StaffController::class, 'getDetails']);

Route::get("categories", [CategoryController::class, 'index']);
Route::get("occupations", [OccupationController::class, 'index']);
Route::get("departments", [DepartmentController::class, 'index']);

Route::post("register-staff",[StaffController::class, "store"]);


