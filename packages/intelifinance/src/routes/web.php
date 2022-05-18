<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Softwarescares\Intelifinance\app\Http\Controllers\PaypalController;

Route::post('paypal-payment', [PaypalController::class, 'pay']);

