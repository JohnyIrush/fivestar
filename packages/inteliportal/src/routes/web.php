<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Softwarescares\Inteliportal\app\Http\Controllers\UI\UIController;


Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {

    $authMiddleware = config('jetstream.guard')
            ? 'auth:'.config('jetstream.guard')
            : 'auth';

    $authSessionMiddleware = config('jetstream.auth_session', false)
            ? config('jetstream.auth_session')
            : null;

    Route::group(['middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
        Route::get("portal/student", [UIController::class, "student"])->name("portal-student");
        Route::get("portal/guardian", [UIController::class, "guardian"])->name("portal-guardian");
        Route::get("portal/staff", [UIController::class, "staff"])->name("portal-staff");
        Route::get("portal/school", [UIController::class, "school"])->name("portal-school");
});
});
