<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Softwarescares\Intelifinance\app\Http\Controllers\UI\UIController;

use Softwarescares\Intelifinance\app\Http\Controllers\PaypalController;


Route::get('finance', [UIController::class, 'finance'])->name("finance");

Route::post('paypal-payment', [PaypalController::class, 'pay']);

