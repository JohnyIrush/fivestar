<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers\Guardian;

use App\Models\User;
use Softwarescares\Inteliportal\app\Http\Controllers\Controller;
use Softwarescares\Inteliportal\app\Http\Requests\StoreGuardianRequest;
use Softwarescares\Inteliportal\app\Http\Requests\UpdateGuardianRequest;
use Softwarescares\Inteliportal\app\Models\Guardian;

class GuardianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Guardian::with("user")->get());
    }

    public function getDetails()
    {
        $id = 4;
        $details = Guardian::with(["user","students"])->where("user_id", $id)->get();

        return response()->json($details );
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
     * @param  \App\Http\Requests\StoreGuardianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGuardianRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function show(Guardian $guardian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function edit(Guardian $guardian)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGuardianRequest  $request
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGuardianRequest $request, Guardian $guardian)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Guardian  $guardian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guardian $guardian)
    {
        //
    }
}
