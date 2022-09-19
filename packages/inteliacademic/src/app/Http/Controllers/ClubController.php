<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreClubRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateClubRequest;
use Softwarescares\Inteliacademic\app\Models\Club;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class ClubController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Club $club, Table $table)
    {

        return $table->table(
            $club, 
            Club::all()
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
    public function create(Club $club, Form $form)
    {
        return $form->form($club, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/club/store",
            'update' => "academic/club/update",
            "delete" => "academic/club/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClubRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClubRequest $request, Store $store, Club $club)
    {
        $club = $store->store($request, $club);

        return response()->json($club);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function show(Club $club)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function edit(Club $club)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateClubRequest  $request
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateClubRequest $request, Club $club, Update $update)
    {
        $club = $update->update($request, $club,["id" => $request->input("id")]);

        return response()->json($club);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Club  $club
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Club $club, Delete $delete)
    {
        $club = $delete->delete($request, $club,["id" => $request->input("id")]);

        return response()->json($club);

    }
}
