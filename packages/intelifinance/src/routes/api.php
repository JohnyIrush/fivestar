<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Intelifinance\app\Http\Controllers\FeeController;
use Softwarescares\Intelifinance\app\Http\Controllers\ServiceController;

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

Route::get('finance/service/index', [ServiceController::class ,'index']);
Route::get('finance/service/create', [ServiceController::class ,'create']);
Route::post('finance/service/store', [ServiceController::class ,'store']);
Route::post('finance/service/update', [ServiceController::class ,'update']);
Route::post('finance/service/destroy', [ServiceController::class ,'destroy']);

Route::get('finance/fee/index', [FeeController::class ,'index']);
Route::get('finance/fee/create', [FeeController::class ,'create']);
Route::post('finance/fee/store', [FeeController::class ,'store']);
Route::post('finance/fee/update', [FeeController::class ,'update']);
Route::post('finance/fee/destroy', [FeeController::class ,'destroy']);


