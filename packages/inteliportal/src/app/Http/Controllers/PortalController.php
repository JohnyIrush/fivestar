<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Softwarescares\Inteliinstaller\app\Events\SchoolAdminRegisteredEvent;
use Softwarescares\Inteliportal\app\Models\Portal;
use Softwarescares\Inteliportal\app\Http\Requests\StorePortalRequest;
use Softwarescares\Inteliportal\app\Http\Requests\UpdatePortalRequest;

class PortalController extends Controller
{
    use PasswordValidationRules;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePortalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortalRequest $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'phone' => $request['phone'],
            'password' => Hash::make($request['password']),
        ]);

        if ($request->input("registration_type") == 1)
        {
            $user->assignRole("School Admin");

            event(new SchoolAdminRegisteredEvent($user));
        }
        else if($request->input("registration_type") == 2)
        {
        }
        else if($request->input("registration_type") == 3)
        {
        }
        else if($request->input("registration_type") == 4)
        {
        }

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function show(Portal $portal)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function edit(Portal $portal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePortalRequest  $request
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePortalRequest $request, Portal $portal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portal $portal)
    {
        //
    }
}
