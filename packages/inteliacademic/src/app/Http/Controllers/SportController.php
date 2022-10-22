<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreSportRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateSportRequest;
use Softwarescares\Inteliacademic\app\Models\Sport;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sport $sport, Table $table)
    {

        return $table->table(
            $sport, 
            Sport::all()
            ,
            [
            ], 
            []
           , 
           ["icon_path" => "image"],
           [
            'store' => "academic/club/store",
            'update' => "academic/club/update",
            "delete" => "academic/club/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sport $sport, Form $form)
    {
        return $form->form($sport, 
            [
            "status" => [
                "status" => [["id" => 0,"status" => "False"],["id" => 1, "status" =>"True"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ],
            ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/sport/store",
            'update' => "academic/sport/update",
            "delete" => "academic/sport/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSportRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSportRequest $request, Sport $sport, Store $store)
    {
        $sport = $store->store($request, $sport);

        return response()->json($sport);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function show(Sport $sport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function edit(Sport $sport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSportRequest  $request
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSportRequest $request, Sport $sport, Update $update)
    {
        $sport = $update->update($request, $sport,["id" => $request->input("id")]);

        return response()->json($sport);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sport  $sport
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Sport $sport, Delete $delete)
    {
        $sport = $delete->delete($request, $sport,["id" => $request->input("id")]);

        return response()->json($sport);

    }
}
