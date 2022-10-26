<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Softwarescares\Inteliai\app\Http\Controllers\UI\UIController;


Route::get("ai", [UIController::class, "ai"])->name("ai");