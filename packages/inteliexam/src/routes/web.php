<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Softwarescares\Inteliexam\app\Http\Controllers\UI\UIController;


Route::get("exam", [UIController::class, "exam"])->name("exam");