<?php

use Softwarescares\Inteliconfig\app\Http\Controllers\UI\UIController;

use Illuminate\Support\Facades\Route;

Route::get('config', [UIController::class, 'config'])->name('config');
