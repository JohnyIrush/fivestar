<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers;

use Softwarescares\Inteliportal\app\Models\Portal;
use Softwarescares\Inteliportal\app\Http\Requests\StorePortalRequest;
use Softwarescares\Inteliportal\app\Http\Requests\UpdatePortalRequest;

class PortalController extends Controller
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
     * @param  \App\Http\Requests\StorePortalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePortalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Portal  $portal
     * @return \Illuminate\Http\Response
     */
    public function show(Portal $portal)
    {
        //
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
