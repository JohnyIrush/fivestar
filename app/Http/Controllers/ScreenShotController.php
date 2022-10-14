<?php

namespace App\Http\Controllers;

use App\Models\ScreenShot;
use App\Http\Requests\StoreScreenShotRequest;
use App\Http\Requests\UpdateScreenShotRequest;

class ScreenShotController extends Controller
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
     * @param  \App\Http\Requests\StoreScreenShotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreScreenShotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ScreenShot  $screenShot
     * @return \Illuminate\Http\Response
     */
    public function show(ScreenShot $screenShot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ScreenShot  $screenShot
     * @return \Illuminate\Http\Response
     */
    public function edit(ScreenShot $screenShot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateScreenShotRequest  $request
     * @param  \App\Models\ScreenShot  $screenShot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateScreenShotRequest $request, ScreenShot $screenShot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ScreenShot  $screenShot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ScreenShot $screenShot)
    {
        //
    }
}
