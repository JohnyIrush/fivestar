<?php

namespace Softwarescares\Intelifinance\app\Http\Controllers;

use Softwarescares\Intelifinance\app\Http\Requests\StoreServiceRequest;
use Softwarescares\Intelifinance\app\Http\Requests\UpdateServiceRequest;
use Softwarescares\Intelifinance\app\Models\Service;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Service $service, Table $table)
    {
        return $table->table(
            $service, 
            Service::all()
            ,
            [], 
            []
           , 
           ["icon" => "image"],
           [
            'store' => "finance/service/store",
            'update' => "finance/service/update",
            "delete" => "finance/service/destroy"
           ],
           ["created_at","updated_at"],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Service $service, Form $form)
    {
        return $form->form($service, [
            "status" => [
                "status" => [["id" => 0,"status" => "InActive"],["id" => 1, "status" =>"Active"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
                ],
            ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "finance/service/store",
            'update' => "finance/service/update",
            "delete" => "finance/service/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreServiceRequest $request, Service $service, Store $store)
    {
        $service = $store->store($request, $service);

        return response()->json($service);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeRequest  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateServiceRequest $request, Service $service, Update $update)
    {
        $service = $update->update($request, $service,["id" => $request->input("id")]);

        return response()->json($service);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Service $service, Delete $delete)
    {
        $service = $delete->delete($request, $service,["id" => $request->input("id")]);

        return response()->json($service);
    }
}
