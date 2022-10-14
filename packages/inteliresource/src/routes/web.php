<?php

use Softwarescares\Inteliresource\app\Http\Controllers\UI\UIController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;

use Inertia\Inertia;

use Softwarescares\Inteliresource\app\Http\Controllers\User\UserManagerController;
use Softwarescares\Inteliresource\app\Http\Controllers\Gallery\GalleryController;
use Softwarescares\Inteliresource\app\Http\Controllers\Settings\SettingsController;

use Softwarescares\Inteliresource\app\Http\Controllers\User\Task\TaskController;

use Softwarescares\Inteliresource\app\Http\Controllers\FileUploadController;
use Illuminate\Support\Facades\Storage;



Route::get('/dashboard', [UIController::class, 'dashboard'])->name('dashboard');


Route::get('/file-manager', [UIController::class, 'fileManager'])->name('file-manager');


Route::get('/gallery', [GalleryController::class, 'gallery'])->name('gallery');

Route::get('resource/screenshot', [UIController::class, 'screenShot'])->name("screen-shot");

Route::get('/settings', [SettingsController::class, 'settings'])->name('settings');


Route::get('/folders/paths', function(){
    return Storage::allDirectories('/');
});
