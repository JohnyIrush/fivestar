<?php

use App\Http\Controllers\UI\UIController;
use App\Http\Controllers\Teachers\CourseController;
use App\Http\Controllers\Students\LessonController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\TestController;

/*
 Main UI Routes
*/

Route::get('/dashboard', [UIController::class, 'dashboard'])->name('dashboard');
Route::get('/profile', [UIController::class, 'profile'])->name('user-profile');
Route::get('/finance', [UIController::class, 'finance'])->name('finance');
Route::get('/virtual-reality', [UIController::class, 'vr'])->name('virtual-reality');

Route::get('/vue', [UIController::class, 'vuex'])->name('vue');

/*Inteli Teams*/

/*
Route::group(['middleware' => 'auth'])->group(function () {
    Route::group(['middleware' => 'role:student', 'prefix' => 'student', 'as' => 'student.' ])->group(function () {
        Route::get('/lessons', [LessonController::class, 'index'])->name('lessons');
    });

    Route::group(['middleware' => 'role:teacher', 'prefix' => 'teacher', 'as' => 'teacher.' ])->group(function () {
        Route::get('/courses', [CourseController::class, 'index'])->name('courses'); 
    });

    Route::group(['middleware' => 'role:admin', 'prefix' => 'admin', 'as' => 'admin.'])->group(function () {
        Route::get('/users', [userController::class, 'index'])->name('users');
    });
});
*/

Route::get('/vuex', [TestController::class, 'vuex'])->name('vuex');
Route::get('/tabv1', [TestController::class, 'tabv1'])->name('tabv1');
Route::get('/more', [TestController::class, 'more'])->name('more');