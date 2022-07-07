<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider;

use App\Models\User;
use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Softwarescares\Intelisafaricomdaraja\app\Contracts\TransactionInterface;
use Softwarescares\Intelisafaricomdaraja\app\Events\StoreCurrentTransactionUserEvent;
use Softwarescares\Intelisafaricomdaraja\app\Http\Requests\StoreMpesaExpressRequest;
use Softwarescares\Intelisafaricomdaraja\app\Models\CurrentTransactionUser;
use Softwarescares\Intelisafaricomdaraja\app\Models\MpesaExpressTransaction;

use Softwarescares\Intelisafaricomdaraja\app\Extensions\Transaction;

use Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent;

class MpesaExpressController extends Controller
{

    protected $transactionService;

    public $user;

    public function __construct(TransactionInterface $transactionService,Transaction $trans)
    {
        $this->middleware("web");
        $this->transactionService = $transactionService;
        $this->trans = $trans;


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
        return view("safaricomdaraja::components.forms.mpesa-express-form");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mpesaExpress(StoreMpesaExpressRequest $request)
    {
        #return response()->json($request->all());
        //event(new StoreCurrentTransactionUserEvent(1)); // persists this user even after the callback from safaricom

        event(new MPesaExpressTransactionEvent(($this->transactionService->transaction($request->all()))));
        /*
        event(new Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent([
            "MerchantRequestID"=> "41159-117026555-1",
            "CheckoutRequestID"=> "ws_CO_07072022120638746708374149",
            "ResponseCode"=> "0",
            "ResponseDescription"=> "Success. Request accepted for processing",
            "CustomerMessage"=> "Success. Request accepted for processing"
          ]));
        event(new Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent(User::find(31)));
        event(new Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent([
            "requestId"=> "16813-15-1",
            "errorCode"=> "404.001.04",
            "errorMessage"=> "Invalid Access Token",
          ]));
        */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function result(StoreMpesaExpressRequest $request)
    {
        Log::info("request callback: " . json_encode($request->all()));

        $this->transactionService->result($request->all(), Auth::user());
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function transactions()
    {
        return view("safaricomdaraja::components.plugins.mpesa-express-transactions")->with([
            "mpesaexpresstransactions" => MpesaExpressTransaction::all()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function accessToken()
    {
        return $this->trans->accessTokenTest();
    }
}
