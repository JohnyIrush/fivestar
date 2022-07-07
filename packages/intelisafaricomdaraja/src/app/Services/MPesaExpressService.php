<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Services;

use Carbon\Carbon;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;
use Softwarescares\Intelisafaricomdaraja\app\Contracts\TransactionInterface;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionNotificationEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionEvent;
use Softwarescares\Intelisafaricomdaraja\app\Events\TransactionStatusNotificationEvent;
use Softwarescares\Intelisafaricomdaraja\app\Extensions\Transaction;

use App\Models\User;
use Softwarescares\Intelisafaricomdaraja\app\Services\AuthorizationService;
use Softwarescares\Intelisafaricomdaraja\app\Models\CurrentTransactionUser;

use Illuminate\Support\Facades\Auth;
use Softwarescares\Inteliinstaller\app\Models\Inteli;
use Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionResultEvent;

class MPesaExpressService extends Transaction implements TransactionInterface
{
    use AuthorizationService;

    public function __construct()
    {

    }

    //-- stk push transaction

    public function transaction($request)
    {
        $url = (config('safaricomdaraja.MPESA.ENV') === "production") ? "https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest" : "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest";

        $body = [
            'BusinessShortCode' => config("safaricomdaraja.MPESA.BUSINESSSHORTCODE"),
            'Password' => $this->darajaPasswordGenerator(),
            'Timestamp' => Carbon::rawParse('now')->format('YmdHms'),
            'TransactionType' => 'CustomerPayBillOnline',
            'Amount' => Inteli::find($request['version'])->price,//$request["Amount"],
            'PartyA' => User::find($request['user_id'])->phone,//$request["Phone"],
            'PartyB' => config("safaricomdaraja.MPESA.BUSINESSSHORTCODE"),
            'PhoneNumber' => User::find($request['user_id'])->phone,//$request["Phone"],
            'CallBackURL' => config("safaricomdaraja.APP_DOMAIN_UR") .'/mpesaexpress/result',//"https://packageengine.softwarescares.com/mpesaexpress/result",
            'AccountReference' => config("app.name"),
            'TransactionDesc' => "Lipa Na M-PESA",
        ];

        return $this->serviceRequest($url, $body);

    }

    /*** Handle Transaction Response ***/

    public function result($result, $user)
    {
             // Fire Notification


             //Fire Event to update mpesa transaction table

             //event(new MPesaExpressTransactionResultEvent(($result)));
             /*
             event(new Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionResultEvent(["Body" => ["stkCallback" => ["MerchantRequestID" => "29115-34620561-1","CheckoutRequestID" => "ws_CO_191220191020363925","ResultCode" => 0,"ResultDesc" => "The service request is processed successfully.","CallbackMetadata" => ["Item" => [[   "Name" => "Amount",   "Value" => 1.00],[   "Name" => "MpesaReceiptNumber",   "Value" => "NLJ7RT61SV"],[   "Name" => "TransactionDate",   "Value" => 20191219102115],[   "Name" => "PhoneNumber",   "Value" => 254708374149]]          ]       ]    ]]));

             event(new Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionResultEvent([
                  "Body" => [
                     "stkCallback" => [
                        "MerchantRequestID" => "29115-34620561-1",
                        "CheckoutRequestID" => "ws_CO_191220191020363925",
                        "ResultCode" => 1032,
                        "ResultDesc" => "Request cancelled by user."
                     ]
                  ]
             ]));

             event(new Softwarescares\Intelisafaricomdaraja\app\Events\MPesaExpressTransactionResultEvent([
                  "Body" => [
                     "stkCallback" => [
                        "MerchantRequestID" => "29115-34620561-1",
                        "CheckoutRequestID" => "ws_CO_191220191020363925",
                        "ResultCode" => 0,
                        "ResultDesc" => "The service request is processed successfully."
                     ]
                  ]
             ]));
             */


    }

    public function mpesaExpressQuery($CheckoutRequestID)
    {
        $url = (config('safaricomdaraja.MPESA_ENV') === "production") ? "https://live.safaricom.co.ke/mpesa/stkpushquery/v1/query" : "https://sandbox.safaricom.co.ke/mpesa/stkpushquery/v1/query";
        $body = [
            "BusinessShortCode" => env("safaricomdaraja.MPESA_SHORTCODE"),
            "Password" => $this->darajaPasswordGenerator(),
            "Timestamp" => Carbon::rawParse('now')->format('YmdHms'),
            "CheckoutRequestID" => $CheckoutRequestID,
        ];

        return json_decode($this->serviceRequest($url, $body));
    }



}
