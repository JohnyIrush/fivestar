<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Http\Controllers;

use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Softwarescares\Intelisafaricomdaraja\app\Models\BusinessToCustomerTransaction;
use Softwarescares\Intelisafaricomdaraja\app\Models\CustomerToBusinessTransaction;
use Softwarescares\Intelisafaricomdaraja\app\Models\MpesaExpressTransaction;

class DarajaController extends Controller
{
    public function __construct()
    {
        $this->middleware("web");
    }

    public function transactions()
    {
        return view("safaricomdaraja::components.plugins.all-transactions")->with(
            [
                'mpesaexpresstransactions' => MpesaExpressTransaction::all(),
                'c2btransactions' => CustomerToBusinessTransaction::all(),
                'b2ctransactions' => BusinessToCustomerTransaction::all()
            ]
        );

    }

    public function transactionResultNotification()
    {
        $user = Auth::user();
        return response()->json(
            $user->unreadNotifications,
            200
        );
    }

    public function readTransactionNotification(Request $request)
    {
        Auth::user()
        ->unreadNotifications
        ->when($request->id, function ($query) use ($request) {
            return $query->where("id", $request->id);
        })
        ->markAsRead();
    }
}
