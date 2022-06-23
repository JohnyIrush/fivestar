<?php

namespace Softwarescares\Intelijenga\app\Http\Controllers;

use Softwarescares\Intelijenga\app\Models\Jenga;
use Softwarescares\Intelijenga\app\Http\Requests\StoreJengaRequest;
use Softwarescares\Intelijenga\app\Http\Requests\UpdateJengaRequest;

use Softwarescares\Intelijenga\app\Http\Controllers\Controller;

class JengaController extends Controller
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
     * @param  \App\Http\Requests\StoreJengaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJengaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Jenga  $jenga
     * @return \Illuminate\Http\Response
     */
    public function show(Jenga $jenga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Jenga  $jenga
     * @return \Illuminate\Http\Response
     */
    public function edit(Jenga $jenga)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJengaRequest  $request
     * @param  \App\Models\Jenga  $jenga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJengaRequest $request, Jenga $jenga)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Jenga  $jenga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenga $jenga)
    {
        //
    }
}
