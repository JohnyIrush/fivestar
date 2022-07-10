<?php

namespace Softwarescares\Intelipaypal\app\Http\Controllers;

use Softwarescares\Intelifinance\app\Events\InteliPaymentSuccessEvent;
use Softwarescares\Intelipaypal\app\Http\Requests\StorePaypalRequest;
use Softwarescares\Intelipaypal\app\Http\Requests\UpdatePaypalRequest;
use Softwarescares\Intelipaypal\app\Models\Paypal;

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
        $paypal = new Paypal();

        $paypal->payment_id = $request["payment_id"];
        $paypal->create_time = $request["create_time"];
        $paypal->payer_country_code = $request["payer_country_code"];
        $paypal->payer_email = $request["payer_email"];
        $paypal->payer_name = $request["payer_name"];
        $paypal->payer_id = $request["payer_id"];

        $paypal->currency_code = $request["currency_code"];
        $paypal->amount = $request["amount"];

        $paypal->payment_status = $request["payment_status"];

        $paypal->update_time = $request["update_time"];

        $paypal->save();

        event(new InteliPaymentSuccessEvent());
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
