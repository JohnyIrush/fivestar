<?php

use Softwarescares\Inteliconfig\app\Http\Controllers\UI\UIController;

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => config('jetstream.middleware', ['web'])], function () {

    $authMiddleware = config('jetstream.guard')
            ? 'auth:'.config('jetstream.guard')
            : 'auth';

    $authSessionMiddleware = config('jetstream.auth_session', false)
            ? config('jetstream.auth_session')
            : null;

    Route::group(['middleware' => array_values(array_filter([$authMiddleware, $authSessionMiddleware]))], function () {
        Route::get('config', [UIController::class, 'config'])->name('config');
});
});
