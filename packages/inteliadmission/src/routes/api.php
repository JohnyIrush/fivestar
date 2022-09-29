<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliadmission\app\Http\Controllers\ApplicantController;
use Softwarescares\Inteliadmission\app\Http\Controllers\ApplicantTypeController;
use Softwarescares\Inteliadmission\app\Http\Controllers\AdmissionController;

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

Route::get("admission/statistics",[AdmissionController::class, "statistics"]);

Route::get("admission/applicant/types",[ApplicantTypeController::class, "applicantTypes"]);

Route::get("admission/applicant/statistics",[ApplicantController::class, "statistics"]);
Route::get("admission/applicant/index",[ApplicantController::class, "index"]);
Route::get("admission/applicant/create",[ApplicantController::class, "create"]);
Route::post("admission/applicant/store",[ApplicantController::class, "store"]);
Route::post("admission/applicant/update",[ApplicantController::class, "update"]);
Route::post("admission/applicant/destroy",[ApplicantController::class, "destroy"]);

Route::get("admission/applicant/response/create",[ApplicantController::class, "applicationResponseCreate"]);

