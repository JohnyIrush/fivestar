<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliteam\app\Http\Controllers\User\UserController;
use Softwarescares\Inteliteam\app\Http\Controllers\User\Task\TaskController;
use SoftwaresCares\Inteliteam\app\Http\Controllers\PermissionRole\PermissionRoleController;


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

Route::get("users", [UserController::class, "index"]);
Route::get("tasks", [TaskController::class, "index"]);

Route::get("roles", [PermissionRoleController::class, "roles"]);
Route::get("permissions", [PermissionRoleController::class, "permissions"]);


