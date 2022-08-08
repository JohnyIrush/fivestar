<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Softwarescares\Inteliadmission\app\Http\Controllers\UI\UIController;

Route::get("admission", [UIController::class, "admission"])->name("admission");

