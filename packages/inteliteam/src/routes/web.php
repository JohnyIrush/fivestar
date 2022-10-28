<?php

use Softwarescares\Inteliteam\app\Http\Controllers\UI\UIController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;


use Softwarescares\Inteliteam\app\Http\Controllers\User\Task\TaskController;

use Illuminate\Support\Facades\Storage;




Route::get('/user-manager', [UIController::class, 'userManager'])->name('user-manager');
Route::get("/task-manager", [UIController::class, "task"])->name('task-manager');
Route::get("/permission-role-manager", [UIController::class, "permissionRoleManager"])->name('permission-role-manager');


Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {

    $authMiddleware = config('jetstream.guard')
            ? 'auth:'.config('jetstream.guard')
            : 'auth';

    $authSessionMiddleware = config('jetstream.auth_session', false)
            ? config('jetstream.auth_session')
            : null;

    Route::group(['middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
        Route::get('/team', [UIController::class, 'team'])->name('team');
});
});