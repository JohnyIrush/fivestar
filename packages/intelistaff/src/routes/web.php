<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Softwarescares\Intelistaff\app\Http\Controllers\UI\UIController;

Route::get("staff",[UIController::class, 'staff']);
