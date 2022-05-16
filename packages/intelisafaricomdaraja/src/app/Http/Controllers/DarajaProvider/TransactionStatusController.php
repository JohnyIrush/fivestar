<?php

namespace Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\DarajaProvider;

use App\Models\User;
use Softwarescares\Intelisafaricomdaraja\app\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Softwarescares\Intelisafaricomdaraja\app\Contracts\TransactionInterface;
use Softwarescares\Intelisafaricomdaraja\app\Events\StoreCurrentTransactionUserEvent;
use Softwarescares\Intelisafaricomdaraja\app\Models\CurrentTransactionUser;

class TransactionStatusController extends Controller
{
    private $transactionService;

    public function __construct(TransactionInterface $transactionService)
    {
        $this->middleware("web");
        $this->transactionService = $transactionService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function transactionStatus()
    {
        return view('safaricomdaraja::components.forms.transaction-status-form');
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

    public function transaction(Request $request)
    {
        event(new StoreCurrentTransactionUserEvent(Auth::user()->id)); // persists this user even after the callback from safaricom
        return $this->transactionService->transaction($request);
    }

    public function result(Request $request)
    {
        Auth::login(User::find(CurrentTransactionUser::find(1)->current_transaction_user_id));
        $this->transactionService->result($request, Auth::user());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
}
