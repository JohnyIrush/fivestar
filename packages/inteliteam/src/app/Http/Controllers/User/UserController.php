<?php

namespace Softwarescares\Inteliteam\app\Http\Controllers\User;

use Softwarescares\Inteliteam\app\Models\UserManager;

use  App\Models\User;

use Softwarescares\Inteliteam\app\Http\Requests\StoreUserManagerRequest;
use Softwarescares\Inteliteam\app\Http\Requests\UpdateUserManagerRequest;

use Softwarescares\Inteliteam\app\Http\Controllers\Controller;
use Inertia\Inertia;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

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
    public function create(User $user,Form $form)
    {
        return $form->form($user, [

        ],['id','created_at', 'updated_at','current_team_id','remember_token', 'two_factor_recovery_codes','two_factor_secret', 'email_verified_at','profile_photo_url'],
        [
            "store" => "user/store",
            "update" => "user/update",
            "delete" => "user/delete"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreUserManagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserManagerRequest $request,User $user, Store $store)
    {
        $user = $store->store($request, $user);

        return response()->json($user); 
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
    public function update(UpdateUserManagerRequest $request, User $user, UserManager $userManager, Update $update)
    {
        $user = $update->update($request, $user,["id" => $request->input("id")]);

        return response()->json($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserManager  $userManager
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserManager $userManager, User $user, Delete $delete)
    {
        $user = $delete->delete($request, $user,["id" => $request->input("id")]);

        return response()->json($user);
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
