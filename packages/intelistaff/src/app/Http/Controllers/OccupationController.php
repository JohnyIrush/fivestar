<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Http\Requests\StoreOccupationRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateOccupationRequest;
use Softwarescares\Intelistaff\app\Models\Occupation;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Occupation $occupation, Table $table)
    {

        return $table->table(
            $occupation, 
            Occupation::all()
            ,
            [], 
            []
           , 
           ["icon" => "image"],
           [
            'store' => "staff/occupation/store",
            'update' => "staff/occupation/update",
            "delete" => "staff/occupation/destroy"
           ],
           ["created_at","updated_at"]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Occupation $occupation,Form $form)
    {
        return $form->form($occupation, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "staff/occupation/store",
            'update' => "staff/occupation/update",
            "delete" => "staff/occupation/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOccupationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreOccupationRequest $request, Occupation $occupation, Store $store)
    {
        $occupation = $store->store($request, $occupation);
 
        return response()->json($occupation);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function show(Occupation $occupation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function edit(Occupation $occupation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationRequest  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateOccupationRequest $request, Occupation $occupation, Update $update)
    {
        $occupation = $update->update($request, $occupation,["id" => $request->input("id")]);

        return response()->json($occupation);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Occupation $occupation, Delete $delete)
    {
        $occupation = $delete->delete($request, $occupation,["id" => $request->input("id")]);

        return response()->json($occupation);

    }
}
