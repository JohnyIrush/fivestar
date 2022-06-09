<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Jetstream;
use Softwarescares\Inteliinstaller\app\Events\SchoolAdminRegisteredEvent;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreSchoolAdminRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateSchoolAdminRequest;


class SchoolAdminController extends Controller
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
     * @param  \App\Http\Requests\StoreSchoolAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSchoolAdminRequest $request)
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

        $user->assignRole("School Admin");

        event(new SchoolAdminRegisteredEvent($user));

        return $user;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function show(User $schoolAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function edit(User $schoolAdmin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSchoolAdminRequest  $request
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSchoolAdminRequest $request, User $schoolAdmin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SchoolAdmin  $schoolAdmin
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $schoolAdmin)
    {
        //
    }
}
