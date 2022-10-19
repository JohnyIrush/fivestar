<?php

use Softwarescares\Inteliteam\app\Http\Controllers\UI\UIController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;


use Softwarescares\Inteliteam\app\Http\Controllers\User\Task\TaskController;

use Illuminate\Support\Facades\Storage;


Route::get('/team', [UIController::class, 'team'])->name('team');

Route::get('/user-manager', [UIController::class, 'userManager'])->name('user-manager');
Route::get("/task-manager", [UIController::class, "task"])->name('task-manager');
Route::get("/permission-role-manager", [UIController::class, "permissionRoleManager"])->name('permission-role-manager');
