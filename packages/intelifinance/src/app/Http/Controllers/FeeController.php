<?php

namespace Softwarescares\Intelifinance\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Intelitimetable\app\Models\Term;
use Softwarescares\Intelifinance\app\Models\Service;
use Softwarescares\Intelifinance\app\Models\Fee;
use Softwarescares\Intelifinance\app\Http\Requests\StoreFeeRequest;
use Softwarescares\Intelifinance\app\Http\Requests\UpdateFeeRequest;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Fee $fee, Table $table)
    {
        return $table->table(
            $fee, 
            Fee::all()
            ,
            [], 
            []
           , 
           ["icon" => "image"],
           [
            'store' => "finance/fee/store",
            'update' => "finance/fee/update",
            "delete" => "finance/fee/destroy"
           ],
           ["created_at","updated_at","term_id","level_id"],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Fee $fee, Form $form)
    {
        return $form->form($fee, [
            "status" => [
                "status" => [["id" => 0,"status" => "InActive"],["id" => 1, "status" =>"Active"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
                ],
            "service" => [
                "service" => Service::all(),
                "name" => "service",
                "value" => "id",
                "limit" => 10,
                ],
            "term_id" => [
                "term_id" => Term::all(),
                "name" => "term",
                "value" => "id",
                "limit" => 1,
                ],
            "level_id" => [
                "level_id" => Level::all(),
                "name" => "level",
                "value" => "id",
                "limit" => 1,
                ],
            ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "finance/fee/store",
            'update' => "finance/fee/update",
            "delete" => "finance/fee/destroy"
            ],
            ["field" => "service","type" => "int"]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeeRequest $request, Fee $fee, Store $store)
    {
        $fee = $store->store($request, $fee);

        return response()->json($fee);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Fee $fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Fee $fee)
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
    public function update(UpdateFeeRequest $request, Fee $fee, Update $update)
    {
        $fee = $update->update($request, $fee,["id" => $request->input("id")]);

        return response()->json($fee);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Fee $fee, Delete $delete)
    {
        $fee = $delete->delete($request, $fee,["id" => $request->input("id")]);

        return response()->json($fee);
    }
}
