<?php

namespace Softwarescares\Intelifinance\app\Http\Controllers;

use Softwarescares\Intelifinance\app\Http\Controllers\Controller;
use Softwarescares\Intelifinance\app\Http\Requests\StoreInteliPaymentRequest;
use Softwarescares\Intelifinance\app\Http\Requests\UpdateInteliPaymentRequest;
use Softwarescares\Intelifinance\app\Models\InteliPayment;


class InteliPaymentController extends Controller
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
     * @param  \App\Http\Requests\StoreInteliPaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInteliPaymentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InteliPayment  $inteliPayment
     * @return \Illuminate\Http\Response
     */
    public function show(InteliPayment $inteliPayment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InteliPayment  $inteliPayment
     * @return \Illuminate\Http\Response
     */
    public function edit(InteliPayment $inteliPayment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInteliPaymentRequest  $request
     * @param  \App\Models\InteliPayment  $inteliPayment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInteliPaymentRequest $request, InteliPayment $inteliPayment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InteliPayment  $inteliPayment
     * @return \Illuminate\Http\Response
     */
    public function destroy(InteliPayment $inteliPayment)
    {
        //
    }
}
