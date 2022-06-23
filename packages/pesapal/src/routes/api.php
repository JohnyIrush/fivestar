<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Lipagateways\Pesapal\app\Http\Controllers\PesapalController;

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

Route::post('/pesapal/pay', [PesapalController::class, 'store']);
Route::post('/pesapal/callback', [PesapalController::class, 'callback']);


