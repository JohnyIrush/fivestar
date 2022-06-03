<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use Softwarescares\Inteliteam\app\Http\Controllers\User\UserController;
use Softwarescares\Inteliteam\app\Http\Controllers\User\Task\TaskController;
use Softwarescares\Inteliteam\app\Http\Controllers\PermissionRole\PermissionRoleController;


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

Route::post("create-role", [PermissionRoleController::class, "storeRole"]);
Route::post("create-permission", [PermissionRoleController::class, "storePermission"]);

Route::post("edit-role", [PermissionRoleController::class, "updateRole"]);
Route::post("edit-permission", [PermissionRoleController::class, "updatePermission"]);

Route::post("delete-role/{id}", [PermissionRoleController::class, "destroyRole"]);
Route::post("delete-permission/{id}", [PermissionRoleController::class, "destroyPermission"]);



