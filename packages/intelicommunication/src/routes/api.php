<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Intelicommunication\app\Http\Controllers\CommunicationMethodController;
use Softwarescares\Intelicommunication\app\Http\Controllers\CommunicationController;

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


Route::get("communication/index",[CommunicationController::class, "index"]);
Route::get("communication/create",[CommunicationController::class, "create"]);
Route::post("communication/store",[CommunicationController::class, "store"]);
Route::post("communication/update",[CommunicationController::class, "update"]);
Route::post("communication/destroy",[CommunicationController::class, "destroy"]);

Route::get("communication/method/options/index",[CommunicationMethodController::class, "communicationMethod"]);