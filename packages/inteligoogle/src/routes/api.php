<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteligoogle\app\Http\Controllers\GoogleSheetController;

use Softwarescares\Inteligoogle\app\Http\Controllers\GoogleFormController;

use Softwarescares\Inteligoogle\app\Http\Controllers\GoogleDocController;

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

Route::get("google/form/index",[GoogleFormController::class,"index"]);
Route::get("google/form/create",[GoogleFormController::class,"create"]);
Route::post("google/form/store",[GoogleFormController::class,"store"]);
Route::post("google/form/update",[GoogleFormController::class,"update"]);
Route::post("google/form/destroy",[GoogleFormController::class,"destroy"]);


Route::get("google/sheet/index",[GoogleSheetController::class,"index"]);
