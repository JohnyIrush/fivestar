<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Softwarescares\Intelistaff\app\Http\Controllers\UI\UIController;
use Softwarescares\Intelistaff\app\Http\Controllers\StaffController;


Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {

    $authMiddleware = config('jetstream.guard')
            ? 'auth:'.config('jetstream.guard')
            : 'auth';

    $authSessionMiddleware = config('jetstream.auth_session', false)
            ? config('jetstream.auth_session')
            : null;

    Route::group(['middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
        Route::get("staff",[UIController::class, 'staff'])->name("staff");
});
});


Route::get('staff/register', [StaffController::class, 'signUpForm']);