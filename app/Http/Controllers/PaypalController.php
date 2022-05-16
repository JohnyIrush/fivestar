<?php

namespace App\Http\Controllers;

use App\Models\Paypal;
use App\Http\Requests\StorePaypalRequest;
use App\Http\Requests\UpdatePaypalRequest;

class PaypalController extends Controller
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
     * @param  \App\Http\Requests\StorePaypalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaypalRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function show(Paypal $paypal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function edit(Paypal $paypal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePaypalRequest  $request
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaypalRequest $request, Paypal $paypal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paypal  $paypal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paypal $paypal)
    {
        //
    }
}
