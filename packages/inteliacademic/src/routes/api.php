<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Inteliacademic\app\Http\Controllers\AssignmentController;
use Softwarescares\Inteliacademic\app\Http\Controllers\AttendanceController;
use Softwarescares\Inteliacademic\app\Http\Controllers\ClubController;
use Softwarescares\Inteliacademic\app\Http\Controllers\LeadersController;
use Softwarescares\Inteliacademic\app\Http\Controllers\StreamController;
use Softwarescares\Inteliacademic\app\Http\Controllers\LevelController;
use Softwarescares\Inteliacademic\app\Http\Controllers\QualificationController;
use Softwarescares\Inteliacademic\app\Http\Controllers\SectionController;
use Softwarescares\Inteliacademic\app\Http\Controllers\SportController;
use Softwarescares\Inteliacademic\app\Http\Controllers\SubjectController;
use Softwarescares\Inteliacademic\app\Http\Controllers\AcademicController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Dash routes

Route::get("academic/statistics",[AcademicController::class, "statistics"]);


Route::get("levels",[LevelController::class, "index"]);
Route::post("academic/level/detail",[LevelController::class, "detail"]);

Route::get("streams",[StreamController::class, "index"]);
Route::get("sports",[SportController::class, "index"]);
Route::get("clubs",[ClubController::class, "index"]);

Route::get("sections",[SectionController::class, "index"]);

Route::get("leadership",[LeadersController::class, "index"]);




Route::get("academic/subject/index",[SubjectController::class, "index"]);
Route::get("academic/subject/create",[SubjectController::class, "create"]);
Route::post("academic/subject/store",[SubjectController::class, "store"]);
Route::post("academic/subject/update",[SubjectController::class, "update"]);
Route::post("academic/subject/destroy",[SubjectController::class, "destroy"]);

Route::get("academic/section/index",[SectionController::class, "index"]);
Route::get("academic/section/create",[SectionController::class, "create"]);
Route::post("academic/section/store",[SectionController::class, "store"]);
Route::post("academic/section/update",[SectionController::class, "update"]);
Route::post("academic/section/destroy",[SectionController::class, "destroy"]);

Route::get("academic/level/index",[LevelController::class, "index"]);
Route::get("academic/level/create",[LevelController::class, "create"]);
Route::post("academic/level/store",[LevelController::class, "store"]);
Route::post("academic/level/update",[LevelController::class, "update"]);
Route::post("academic/level/destroy",[LevelController::class, "destroy"]);

Route::get("academic/stream/index",[StreamController::class, "index"]);
Route::get("academic/stream/create",[StreamController::class, "create"]);
Route::post("academic/stream/store",[StreamController::class, "store"]);
Route::post("academic/stream/update",[StreamController::class, "update"]);
Route::post("academic/stream/destroy",[StreamController::class, "destroy"]);


Route::get("academic/qualification/create",[QualificationController::class, "create"]);
Route::post("academic/qualification/store",[QualificationController::class, "store"]);
Route::post("academic/qualification/update",[QualificationController::class, "update"]);
Route::post("academic/qualification/destroy",[QualificationController::class, "destroy"]);


Route::get("academic/club/index",[ClubController::class, "index"]);
Route::get("academic/club/create",[ClubController::class, "create"]);
Route::post("academic/club/store",[ClubController::class, "store"]);
Route::post("academic/club/update",[ClubController::class, "update"]);
Route::post("academic/club/destroy",[ClubController::class, "destroy"]);

Route::get("academic/sport/index",[SportController::class, "index"]);
Route::get("academic/sport/create",[SportController::class, "create"]);
Route::post("academic/sport/store",[SportController::class, "store"]);
Route::post("academic/sport/update",[SportController::class, "update"]);
Route::post("academic/sport/destroy",[SportController::class, "destroy"]);

Route::get("academic/attendance/index",[AttendanceController::class, "index"]);
Route::get("academic/attendance/create",[AttendanceController::class, "create"]);
Route::post("academic/attendance/store",[AttendanceController::class, "store"]);
Route::post("academic/attendance/update",[AttendanceController::class, "update"]);
Route::post("academic/attendance/destroy",[AttendanceController::class, "destroy"]);


Route::get("academic/assignment/create",[AssignmentController::class, "create"]);
Route::post("academic/assignment/store",[AssignmentController::class, "store"]);
Route::post("academic/assignment/update",[AssignmentController::class, "update"]);
Route::post("academic/assignment/destroy",[AssignmentController::class, "destroy"]);
