<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Http\Requests\StoreOccupationRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateOccupationRequest;
use Softwarescares\Intelistaff\app\Models\Occupation;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Occupation::all());
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
     * @param  \App\Http\Requests\StoreOccupationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOccupationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function show(Occupation $occupation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function edit(Occupation $occupation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationRequest  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOccupationRequest $request, Occupation $occupation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Occupation $occupation)
    {
        //
    }
}
