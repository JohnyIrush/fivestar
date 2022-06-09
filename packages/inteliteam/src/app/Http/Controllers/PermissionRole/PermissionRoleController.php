<?php

namespace Softwarescares\Inteliteam\app\Http\Controllers\PermissionRole;

use Softwarescares\Inteliteam\app\Models\PermissionRole;
use Softwarescares\Inteliteam\app\Http\Requests\StorePermissionRoleRequest;
use Softwarescares\Inteliteam\app\Http\Requests\UpdatePermissionRoleRequest;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

use Softwarescares\Inteliteam\app\Http\Controllers\Controller;

class PermissionRoleController extends Controller
{
    /**
     * Display a listing of the roles.
     *
     * @return \Illuminate\Http\Response
     */
    public function roles()
    {
        return response()->json(Role::with('permissions')->get(), 200);
    }

    /**
     * Display a listing of the permissions.
     *
     * @return \Illuminate\Http\Response
     */
    public function permissions()
    {
        return response()->json(Permission::with('roles')->get(), 200);
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
        $role = Role::create(['name' => $request->name]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePermissionRoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function storePermission(StorePermissionRoleRequest $request)
    {
        $permission = Permission::create(['name' => $request->name]);
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
    public function updateRole(UpdatePermissionRoleRequest $request, PermissionRole $permissionRole)
    {
        $role = Role::find($request->id);
        $role->name = $request->name;
        //$role->guard_name = $request->guard_name;
        $role->update();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePermissionRoleRequest  $request
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function updatePermission(UpdatePermissionRoleRequest $request, PermissionRole $permissionRole)
    {
        $permission = Permission::find($request->id);
        $permission->name = $request->name;
        //$permission->guard_name = $request->guard_name;
        $permission->update();
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function destroyRole(PermissionRole $permissionRole, $id)
    {
        $role = Role::find($id);
        $role->delete();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function destroyPermission(PermissionRole $permissionRole, $id)
    {
        $permission = Permission::find($id);
        $permission->delete();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function givePermission(PermissionRole $permissionRole, UpdatePermissionRoleRequest $request)
    {
        $role = Role::find($request->id);
        $role->syncPermissions($request->options);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function assignRole(PermissionRole $permissionRole, UpdatePermissionRoleRequest $request)
    {
        $permission = Permission::find($request->id);
        $permission->syncRoles($request->options);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function revokePermission(PermissionRole $permissionRole, UpdatePermissionRoleRequest $request)
    {
        $role = Role::find($request->id);
        $role->revokePermissionTo($request->option);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function removeRole(PermissionRole $permissionRole, UpdatePermissionRoleRequest $request)
    {
        $permission = Permission::find($request->id);
        $permission->removeRole($request->option);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function rolePermissions(PermissionRole $permissionRole, $id)
    {
        $permissions = Role::find($id)->permissions;
        return response()->json($permissions);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PermissionRole  $permissionRole
     * @return \Illuminate\Http\Response
     */
    public function permissionRoles(PermissionRole $permissionRole, $id)
    {
        $roles = Permission::find($id)->roles;
        return response()->json($roles);
    }

}
