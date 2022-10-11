<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliform\app\Http\Controllers\OptionController;
use Softwarescares\Inteliform\app\Http\Controllers\FieldSettingController;
use Softwarescares\Inteliform\app\Http\Controllers\FormSectionController;
use Softwarescares\Inteliform\app\Http\Controllers\FieldController;
use Softwarescares\Inteliform\app\Http\Controllers\FormTemplateController;
//use Softwarescares\Inteliform\app\Http\Controllers\FormInfoController;
use Softwarescares\Inteliform\app\Http\Controllers\FormController;


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

Route::get("form/index",[FormController::class,"index"]);
Route::get("form/create",[FormController::class,"create"]);
Route::post("form/store",[FormController::class,"store"]);
Route::post("form/update",[FormController::class,"update"]);
Route::post("form/destroy",[FormController::class,"destroy"]);

//form info is abandoned
// Route::get("form/info/index",[FormInfoController::class,"index"]);
// Route::get("form/info/create",[FormInfoController::class,"create"]);
// Route::post("form/info/store",[FormInfoController::class,"store"]);
// Route::post("form/info/update",[FormInfoController::class,"update"]);
// Route::post("form/info/destroy",[FormInfoController::class,"destroy"]);

Route::get("form/template/index",[FormTemplateController::class,"index"]);
Route::get("form/template/create",[FormTemplateController::class,"create"]);
Route::post("form/template/store",[FormTemplateController::class,"store"]);
Route::post("form/builder/store",[FormTemplateController::class,"storeForm"]);
Route::post("form/template/update",[FormTemplateController::class,"update"]);
Route::delete("form/template/destroy",[FormTemplateController::class,"destroy"]);
Route::get("form/template/builder/last/id",[FormTemplateController::class,"formBuilderLastId"]);

Route::get("form/section/index",[FormSectionController::class,"index"]);
Route::get("form/section/create",[FormSectionController::class,"create"]);
Route::post("form/section/store",[FormSectionController::class,"store"]);
Route::post("form/section/update",[FormSectionController::class,"update"]);
Route::delete("form/section/destroy",[FormSectionController::class,"destroy"]);

Route::get("form/field/index",[FieldController::class,"index"]);
Route::get("form/field/create",[FieldController::class,"create"]);
Route::post("form/field/store",[FieldController::class,"store"]);
Route::post("form/field/update",[FieldController::class,"update"]);
Route::delete("form/field/destroy",[FieldController::class,"destroy"]);


Route::get("form/field/setting/index",[FieldSettingController::class,"index"]);
Route::get("form/field/setting/create",[FieldSettingController::class,"create"]);
Route::post("form/field/setting/store",[FieldSettingController::class,"store"]);
Route::post("form/field/setting/update",[FieldSettingController::class,"update"]);
Route::delete("form/field/setting/destroy",[FieldSettingController::class,"destroy"]);

Route::get("form/field/option/index",[OptionController::class,"index"]);
Route::get("form/field/option/create",[OptionController::class,"create"]);
Route::post("form/field/option/store",[OptionController::class,"store"]);
Route::post("form/field/option/update",[OptionController::class,"update"]);
Route::delete("form/field/option/destroy",[OptionController::class,"destroy"]);