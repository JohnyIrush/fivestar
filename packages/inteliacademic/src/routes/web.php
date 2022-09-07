<?php

use Softwarescares\Inteliacademic\app\Http\Controllers\AcademicController;
use Softwarescares\Inteliacademic\app\Http\Controllers\LevelController;
use Softwarescares\Inteliacademic\app\Http\Controllers\SubjectController;
use Softwarescares\Inteliacademic\app\Http\Controllers\TeacherController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Http\Controllers\UI\UIController;

/**
 * Academic UI Routes
 * 
*/

Route::get('academic', [UIController::class, 'academic'])->name('academic');


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
