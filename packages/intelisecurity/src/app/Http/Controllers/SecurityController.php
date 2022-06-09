<?php

namespace Softwarescares\Intelisecurity\app\Http\Controllers;

use Softwarescares\Intelisecurity\app\Models\Security;
use Softwarescares\Intelisecurity\app\Http\Requests\StoreSecurityRequest;
use Softwarescares\Intelisecurity\app\Http\Requests\UpdateSecurityRequest;

class SecurityController extends Controller
{
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
     * @param  \App\Http\Requests\StoreSecurityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSecurityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function show(Security $security)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function edit(Security $security)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSecurityRequest  $request
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSecurityRequest $request, Security $security)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Security  $security
     * @return \Illuminate\Http\Response
     */
    public function destroy(Security $security)
    {
        //
    }
}
