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

Route::get("staff/index",[StaffController::class, "index"]);
Route::get("staff/create",[StaffController::class, "create"]);
Route::post("staff/store",[StaffController::class, "store"]);
Route::post("staff/update",[StaffController::class, "update"]);
Route::post("staff/destroy",[StaffController::class, "destroy"]);

Route::get("staff/category/index",[CategoryController::class, "index"]);
Route::get("staff/category/create",[CategoryController::class, "create"]);
Route::post("staff/category/store",[CategoryController::class, "store"]);
Route::post("staff/category/update",[CategoryController::class, "update"]);
Route::post("staff/category/destroy",[CategoryController::class, "destroy"]);

Route::get("staff/department/index",[DepartmentController::class, "index"]);
Route::get("staff/department/create",[DepartmentController::class, "create"]);
Route::post("staff/department/store",[DepartmentController::class, "store"]);
Route::post("staff/department/update",[DepartmentController::class, "update"]);
Route::post("staff/department/destroy",[DepartmentController::class, "destroy"]);

Route::get("staff/occupation/index",[OccupationController::class, "index"]);
Route::get("staff/occupation/create",[OccupationController::class, "create"]);
Route::post("staff/occupation/store",[OccupationController::class, "store"]);
Route::post("staff/occupation/update",[OccupationController::class, "update"]);
Route::post("staff/occupation/destroy",[OccupationController::class, "destroy"]);

