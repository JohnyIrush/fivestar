<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreSportRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateSportRequest;
use Softwarescares\Inteliacademic\app\Models\Sport;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Sport::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Sport $sport, Form $form)
    {
        return $form->form($sport, [],
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
