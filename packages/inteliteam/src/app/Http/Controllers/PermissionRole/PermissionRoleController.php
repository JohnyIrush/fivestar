<?php

namespace SoftwaresCares\Inteliteam\app\Http\Controllers\PermissionRole;

use SoftwaresCares\Inteliteam\app\Models\PermissionRole;
use SoftwaresCares\Inteliteam\app\Http\Requests\StorePermissionRoleRequest;
use SoftwaresCares\Inteliteam\app\Http\Requests\UpdatePermissionRoleRequest;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use SoftwaresCares\Inteliteam\app\Http\Controllers\Controller;

class PermissionRoleController extends Controller
{
    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function roles()
    {
        return response()->json(Role::all(), 200);
    }

    /**
     * Display a listing of the permissions.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissions()
    {
        return response()->json(Permission::all(), 200);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storeRole(StorePermissionRoleRequest $request)
    {
        $role = Role::create(['name' => $request->role]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storePermission(StorePermissionRoleRequest $request)
    {
        $permission = Permission::create(['name' => $request->permission]);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function show(PermissionRole $permissionRole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function edit(PermissionRole $permissionRole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionRoleRequest  $request
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePermissionRoleRequest $request, PermissionRole $permissionRole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function destroy(PermissionRole $permissionRole)
    {
        //
    }
}
