<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliadmission\app\Http\Controllers\ExpellController;
use Softwarescares\Inteliadmission\app\Http\Controllers\BanController;
use Softwarescares\Inteliadmission\app\Http\Controllers\LeaveController;
use Softwarescares\Inteliadmission\app\Http\Controllers\InterviewController;
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


Route::get("admission/interview/statistics",[InterviewController::class, "statistics"]);
Route::get("admission/interview/index",[InterviewController::class, "index"]);
Route::get("admission/interview/create",[InterviewController::class, "create"]);
Route::post("admission/interview/store",[InterviewController::class, "store"]);
Route::post("admission/interview/update",[InterviewController::class, "update"]);
Route::post("admission/interview/destroy",[InterviewController::class, "destroy"]);


Route::get("admission/leave/statistics",[LeaveController::class, "statistics"]);
Route::get("admission/leave/index",[LeaveController::class, "index"]);
Route::get("admission/leave/create",[LeaveController::class, "create"]);
Route::post("admission/leave/store",[LeaveController::class, "store"]);
Route::post("admission/leave/update",[LeaveController::class, "update"]);
Route::post("admission/leave/destroy",[LeaveController::class, "destroy"]);

Route::get("admission/expell/statistics",[ExpellController::class, "statistics"]);
Route::get("admission/expell/index",[ExpellController::class, "index"]);
Route::get("admission/expell/create",[ExpellController::class, "create"]);
Route::post("admission/expell/store",[ExpellController::class, "store"]);
Route::post("admission/expell/update",[ExpellController::class, "update"]);
Route::post("admission/expell/destroy",[ExpellController::class, "destroy"]);

Route::get("admission/ban/statistics",[BanController::class, "statistics"]);
Route::get("admission/ban/index",[BanController::class, "index"]);
Route::get("admission/ban/create",[BanController::class, "create"]);
Route::post("admission/ban/store",[BanController::class, "store"]);
Route::post("admission/ban/update",[BanController::class, "update"]);
Route::post("admission/ban/destroy",[BanController::class, "destroy"]);

