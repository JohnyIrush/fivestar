<?php

namespace App\Http\Controllers\UI;

use App\Http\Controllers\Controller;
use App\Models\UI;
use App\Http\Requests\StoreUIRequest;
use App\Http\Requests\UpdateUIRequest;
use Inertia\Inertia;

class UIController extends Controller
{
    /**
     * Render the main dashboard
     */
    public function dashboard()
    {
        return Inertia::render('Theme/windows/Dashboard');
    }


    /**
     * Render the main profile
     */
    public function profile()
    {
        return Inertia::render('Theme/windows/Profile');
    }


    /**
     * Render the main finance
     */
    public function finance()
    {
        return Inertia::render('Theme/windows/Finance');
    }


    /**
     * Render the main finance
     */
    public function vr()
    {
        return Inertia::render('Theme/windows/VR');
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
     * @param  \App\Http\Requests\StoreUIRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUIRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UI  $uI
     * @return \Illuminate\Http\Response
     */
    public function show(UI $uI)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UI  $uI
     * @return \Illuminate\Http\Response
     */
    public function edit(UI $uI)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUIRequest  $request
     * @param  \App\Models\UI  $uI
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUIRequest $request, UI $uI)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UI  $uI
     * @return \Illuminate\Http\Response
     */
    public function destroy(UI $uI)
    {
        //
    }
}
