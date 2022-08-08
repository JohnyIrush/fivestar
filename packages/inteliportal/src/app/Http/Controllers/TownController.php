<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers;

use Softwarescares\Inteliportal\app\Http\Requests\StoreTownRequest;
use Softwarescares\Inteliportal\app\Http\Requests\UpdateTownRequest;
use Softwarescares\Inteliportal\app\Models\Town;

class TownController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Town::all());
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
     * @param  \App\Http\Requests\StoreTownRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTownRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function show(Town $town)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function edit(Town $town)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTownRequest  $request
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTownRequest $request, Town $town)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Town  $town
     * @return \Illuminate\Http\Response
     */
    public function destroy(Town $town)
    {
        //
    }
}
