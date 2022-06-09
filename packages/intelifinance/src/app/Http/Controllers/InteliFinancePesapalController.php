<?php

namespace Softwarescares\Intelifinance\app\Http\Controllers;

use Softwarescares\Intelifinance\app\Http\Controllers\Controller;
use Softwarescares\Intelifinance\app\Http\Requests\StoreInteliFinancePesapalRequest;
use Softwarescares\Intelifinance\app\Http\Requests\UpdateInteliFinancePesapalRequest;
use Softwarescares\Intelifinance\app\Models\InteliFinancePesapal;

use Bryceandy\Laravel_Pesapal\Pesapal;
use Bryceandy\Laravel_Pesapal\Payment;


class InteliFinancePesapalController extends Controller
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
     * @param  \App\Http\Requests\StoreInteliFinancePesapalRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInteliFinancePesapalRequest $request)
    {
        $transaction = Pesapal::getTransactionDetails(
            request('pesapal_merchant_reference'), request('pesapal_transaction_tracking_id')
        );

        // Store the paymentMethod, trackingId and status in the database
        Payment::modify($transaction);

        $status = $transaction['status'];
        // also $status = Pesapal::statusByTrackingIdAndMerchantRef(request('pesapal_merchant_reference'), request('pesapal_transaction_tracking_id'));
        // also $status = Pesapal::statusByMerchantRef(request('pesapal_merchant_reference'));

        return view('your_callback_view', compact('status')); // Display this status to the user. Values are (PENDING, COMPLETED, INVALID, or FAILED)
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InteliFinancePesapal  $inteliFinancePesapal
     * @return \Illuminate\Http\Response
     */
    public function show(InteliFinancePesapal $inteliFinancePesapal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InteliFinancePesapal  $inteliFinancePesapal
     * @return \Illuminate\Http\Response
     */
    public function edit(InteliFinancePesapal $inteliFinancePesapal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInteliFinancePesapalRequest  $request
     * @param  \App\Models\InteliFinancePesapal  $inteliFinancePesapal
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInteliFinancePesapalRequest $request, InteliFinancePesapal $inteliFinancePesapal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InteliFinancePesapal  $inteliFinancePesapal
     * @return \Illuminate\Http\Response
     */
    public function destroy(InteliFinancePesapal $inteliFinancePesapal)
    {
        //
    }

    public function pesapalCallback()
    {

    }
}
