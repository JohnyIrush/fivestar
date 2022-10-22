<?php

namespace Softwarescares\Intelicommunication\app\Http\Controllers;

use Softwarescares\Inteliadmission\app\Models\Status;
use Softwarescares\Intelicommunication\app\Models\Communication;
use Softwarescares\Intelicommunication\app\Http\Requests\StoreCommunicationRequest;
use Softwarescares\Intelicommunication\app\Http\Requests\UpdateCommunicationRequest;

use Softwaresscares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

use Softwarescares\Intelicommunication\app\Http\Controllers\Controller;

class CommunicationController extends Controller
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
    public function create(Communication $communication, Form $form)
    {
       return $form->form($communication,[
            "status_id" => [
                "status" => Status::all(),
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]],
            ['id','created_at', 'updated_at',"user_id"], 
            [
            'store' => "communication/store",
            'update' => "communication/update",
            "delete" => "communication/destroy"
            ],
            [["type" => "hidden","field" => "user_id"]]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCommunicationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCommunicationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function show(Communication $communication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function edit(Communication $communication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCommunicationRequest  $request
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCommunicationRequest $request, Communication $communication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Communication  $communication
     * @return \Illuminate\Http\Response
     */
    public function destroy(Communication $communication)
    {
        //
    }
}
