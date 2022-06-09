<?php

namespace Softwarescares\Inteliteam\app\Http\Controllers\User;

use Softwarescares\Inteliteam\app\Models\UserManager;
use Softwarescares\Inteliteam\app\Http\Requests\StoreUserManagerRequest;
use Softwarescares\Inteliteam\app\Http\Requests\UpdateUserManagerRequest;

use Softwarescares\Inteliteam\app\Http\Controllers\Controller;
use Inertia\Inertia;
use App\Models\User;

class UserController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(User::with('roles', 'permissions')->get(), 200);
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
     * @param  \App\Http\Requests\StoreUserManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserManagerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function show(UserManager $userManager)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function edit(UserManager $userManager)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserManagerRequest  $request
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserManagerRequest $request, UserManager $userManager)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserManager $userManager)
    {
        //
    }

    public function assignRole(UpdateUserManagerRequest $request, UserManager $userManager)
    {
        $user = User::find($request->id);
        $user->syncRoles($request->options);
    }


    public function userRoles(UserManager $userManager, $id)
    {
        $user = User::find($id);
        //$user->assignRole($request->options);
        $roles = $user->getRoleNames(); // Returns a collection
        return response()->json($roles);
    }

    public function givePermission(UpdateUserManagerRequest $request, UserManager $userManager)
    {
        $user = User::find($request->id);
        $user->syncPermissions($request->options);
    }

    public function userPermissions(UserManager $userManager, $id)
    {
        $user = User::find($id);

        $permissions = $user->getAllPermissions(); // Returns a collection
        return response()->json($permissions);
    }


}
