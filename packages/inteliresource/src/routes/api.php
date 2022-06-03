<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliresource\app\Http\Controllers\File\FileManagerController;
use Softwarescares\Inteliresource\app\Http\Controllers\User\Task\TaskController;

use Softwarescares\Inteliresource\app\Http\Controllers\File\FileUploadController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get("tasks", [TaskController::class, "index"]);


Route::post('/upload', [FileManagerController::class, 'store']);

// data Fetch Requests

Route::get('/show-files', [FileManagerController::class, 'show']);

// File Manager Action Routes

/*Folder Actions*/

Route::get('/folder/directories', [FileManagerController::class, 'showFolders']);
Route::post('/folder/create', [FileManagerController::class, 'createFolder']);
Route::post('/folder/copy', [FileManagerController::class, 'copyFolder']);
Route::post('/folder/delete', [FileManagerController::class, 'deleteFolder']);
Route::post('/folder/move', [FileUploadController::class, 'moveFolder']);
Route::post('/folder/properties', [FileManagerController::class, 'propertiesFolder']);
Route::post('/folder/show', [FileManagerController::class, 'showFolder']);
Route::post('/folder/rename', [FileManagerController::class, 'renameFolder']);
Route::post('/folder/restore', [FileManagerController::class, 'restoreFolder']);
Route::post('/folder/download', [FileManagerController::class, 'downloadFolder']);
Route::post('/folder/compress', [FileManagerController::class, 'compressFolder']);
Route::post('/folder/hide', [FileManagerController::class, 'hideFolder']);
Route::post('/folder/visible', [FileManagerController::class, 'visibleFolder']);
Route::post('/folder/stream', [FileManagerController::class, 'streamFolder']);

/*File Actions*/

Route::post('/file/create', [FileManagerController::class, 'createFile']);
Route::post('/file/copy', [FileManagerController::class, 'copyFile']);
Route::post('/file/recycle/{id}', [FileManagerController::class, 'recycleFile']);
Route::post('/file/delete/{id}', [FileManagerController::class, 'deleteFile']);
Route::post('/file/move', [FileManagerController::class, 'moveFile']);
Route::get('/file/properties/{id}', [FileManagerController::class, 'fileProperties']);
Route::get('/file/show', [FileManagerController::class, 'showFile']);
Route::post('/file/rename', [FileManagerController::class, 'renameFile']);
Route::post('/file/restore//{id}', [FileManagerController::class, 'restoreFile']);
Route::post('/file/download/{id}', [FileManagerController::class, 'downloadFile']);
Route::post('/folder/compress', [FileManagerController::class, 'compressFile']);
Route::post('/file/hide', [FileManagerController::class, 'hideFile']);
Route::post('/file/visible', [FileManagerController::class, 'visibleFile']);
Route::post('/file/stream', [FileManagerController::class, 'streamFile']);
