<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Softwarescares\Inteliacademic\app\Http\Controllers\ClubController;
use Softwarescares\Inteliacademic\app\Http\Controllers\LeadersController;
use Softwarescares\Inteliacademic\app\Http\Controllers\StreamController;
use Softwarescares\Inteliacademic\app\Http\Controllers\LevelController;
use Softwarescares\Inteliacademic\app\Http\Controllers\QualificationController;
use Softwarescares\Inteliacademic\app\Http\Controllers\SectionController;
use Softwarescares\Inteliacademic\app\Http\Controllers\SportController;
use Softwarescares\Inteliacademic\app\Http\Controllers\SubjectController;

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
// (new Softwarescares\Inteliacademic\app\Http\Controllers\ClubController())->index()

Route::get("levels",[LevelController::class, "index"]);
Route::get("streams",[StreamController::class, "index"]);
Route::get("subjects",[SubjectController::class, "index"]);
Route::get("sports",[SportController::class, "index"]);
Route::get("clubs",[ClubController::class, "index"]);

Route::get("sections",[SectionController::class, "index"]);

Route::post("create-qualification",[QualificationController::class, "store"]);

Route::get("leadership",[LeadersController::class, "index"]);
