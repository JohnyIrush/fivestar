<?php

use Softwarescares\Inteliresource\app\Http\Controllers\UI\UIController;
use Illuminate\Support\Facades\Route;


Route::get('/resource', [UIController::class, 'resource'])->name('resource');
