<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliexam\app\Http\Controllers\MeritController;
use Softwarescares\Inteliexam\app\Http\Controllers\GradeController;
use Softwarescares\Inteliexam\app\Http\Controllers\ExamController;


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


Route::get("exam/index", [ExamController::class, "index"]);
Route::get("exam/create", [ExamController::class, "create"]);
Route::post("exam/store", [ExamController::class, "store"]);
Route::post("exam/update", [ExamController::class, "update"]);
Route::post("exam/destroy", [ExamController::class, "destroy"]);

Route::get("exam/grade/index", [GradeController::class, "index"]);
Route::get("exam/grade/create", [GradeController::class, "create"]);
Route::post("exam/grade/store", [GradeController::class, "store"]);
Route::post("exam/grade/update", [GradeController::class, "update"]);
Route::post("exam/grade/destroy", [GradeController::class, "destroy"]);

Route::get("exam/merit/index", [MeritController::class, "index"]);
Route::get("exam/merit/create", [MeritController::class, "create"]);
Route::post("exam/merit/store", [MeritController::class, "store"]);
Route::post("exam/merit/update", [MeritController::class, "update"]);
Route::post("exam/merit/destroy", [MeritController::class, "destroy"]);

