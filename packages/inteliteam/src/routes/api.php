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

Route::get("user/create", [UserController::class, "create"]);
Route::post("user/store", [UserController::class, "store"]);
Route::post("user/destroy", [UserController::class, "destroy"]);



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

Route::post("give-permission", [PermissionRoleController::class, "givePermission"]);
Route::post("assign-role", [PermissionRoleController::class, "assignRole"]);

Route::post("revoke-permisssion", [PermissionRoleController::class, "revokePermission"]);
Route::post("remove-role", [PermissionRoleController::class, "removeRole"]);

Route::get("role-permissions/{id}", [PermissionRoleController::class, "rolePermissions"]);
Route::get("permission-roles/{id}", [PermissionRoleController::class, "permissionRoles"]);

Route::get("user-roles/{id}", [UserController::class, "userRoles"]);

Route::post("assign-user-role", [UserController::class, "assignRole"]);
Route::post("give-user-permission", [UserController::class, "givePermission"]);

Route::get("user-permissions/{id}", [UserController::class, "userPermissions"]);



