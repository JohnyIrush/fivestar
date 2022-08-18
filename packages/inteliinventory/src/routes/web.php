<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Softwarescares\Inteliinventory\app\Http\Controllers\UI\UIController;

Route::get("inventory",[UIController::class, "inventory"])->name("inventory");
