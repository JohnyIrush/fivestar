<?php

namespace Softwarescares\Intelifinance\app\Http\Controllers;

use Softwarescares\Intelifinance\app\Models\Paypal;
use Softwarescares\Intelifinance\app\Http\Requests\StorePaypalRequest;
use Softwarescares\Intelifinance\app\Http\Requests\UpdatePaypalRequest;

use Omnipay\Omnipay;

class PaypalController extends Controller
{
    public $gateway;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->gateway = Omnipay::create("Paypal_rest");
        $this->gateway->setClientId("PAYPAL_CLIENT_ID");
        $this->gateway->setSecret("PAYPAL_SECRET_KEY");
        $this->gateway->setTestMode(true);
    }


    public function pay(Request $request)
    {
        return $request;
        try {
            $response = $this->gateway->purchase(array(
                'amount' => $request->paypal->amount,
                'currency' => env("PAYPAL_CURRENCY"),
                'returnUrl' => url("success"),
                'cancelUrl' => url("error")
            ))->send();

            if($response->isRedirect())
            {
                $response->redirect();
            }
            else
            {
                return $response->getMessage();
            }

        } catch (\Throwable $th)
        {
            return $th->getMessage();
        }
    }

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
