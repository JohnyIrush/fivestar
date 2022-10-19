<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Softwarescares\Intelicareer\app\Http\Controllers\UI\UIController;

Route::get("career", [UIController::class, "career"])->name("career");
