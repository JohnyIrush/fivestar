<?php

namespace App\Http\Controllers;

use App\Models\SocialiteAuth;
use App\Http\Requests\StoreSocialiteRequest;
use App\Http\Requests\UpdateSocialiteRequest;

use Laravel\Socialite\Facades\Socialite;

use App\Models\User;

class SocialiteController extends Controller
{

    public function googleRedirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function googleCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        User::updateOrCreate(['email' => $user->email],[
            "name" => $user->name,
            "email" => $user->email,
            "provider" => "google",
            "provider_id" => $user->id,
            "profile_photo_path" => $user->avatar
        ]);

         return redirect()->route('dashboard');
    }

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
     * @param  \App\Http\Requests\StoreSocialiteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSocialiteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Socialite  $socialite
     * @return \Illuminate\Http\Response
     */
    public function show(SocialiteAuth $socialite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Socialite  $socialite
     * @return \Illuminate\Http\Response
     */
    public function edit(SocialiteAuth $socialite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSocialiteRequest  $request
     * @param  \App\Models\Socialite  $socialite
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSocialiteRequest $request, SocialiteAuth $socialite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Socialite  $socialite
     * @return \Illuminate\Http\Response
     */
    public function destroy(SocialiteAuth $socialite)
    {
        //
    }
}
