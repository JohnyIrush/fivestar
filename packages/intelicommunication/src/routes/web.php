<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Softwarescares\Intelicommunication\app\Http\Controllers\UI\UIController;


Route::get("communication", [UIController::class, "communication"])->name("communication");
