<?php

use Softwarescares\Intelisecurity\app\Http\Controllers\UI\UIController;

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;



Route::get("security",[UIController::class, "security"])->name("security");