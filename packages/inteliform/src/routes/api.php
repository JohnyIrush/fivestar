<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliform\app\Http\Controllers\FormController;


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

Route::get("form/index",[FormController::class,"index"]);
Route::get("form/create",[FormController::class,"create"]);
Route::post("form/store",[FormController::class,"store"]);
Route::post("form/update",[FormController::class,"update"]);
Route::post("form/destroy",[FormController::class,"destroy"]);


