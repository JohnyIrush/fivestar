<?php

use Softwarescares\Inteliacademic\app\Http\Controllers\UI\AcademicController;
use Softwarescares\Inteliacademic\app\Http\Controllers\UI\LevelController;
use Softwarescares\Inteliacademic\app\Http\Controllers\UI\SubjectController;
use Softwarescares\Inteliacademic\app\Http\Controllers\UI\TeacherController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;


/**
 * Academic UI Routes
 * 
*/

Route::get('/academic', [AcademicController::class, 'academic'])->name('academic');


/**
 * Timetable generator plugin
*/


Route::get('/levels', [LevelController::class, 'levels'])->name('levels');


/**
 * Academics Module Routes
*/

Route::get('/subjects', [SubjectController::class, 'subjects'])->name('subjects'); //Timetable variable

/**
 * Staff Module Routes
*/

Route::get('/teachers', [TeacherController::class, 'teachers'])->name('teachers'); //Timetable variable
