<?php

namespace Softwarescares\Intelilibrary\app\Http\Controllers;

use Softwarescares\Intelilibrary\app\Http\Requests\StorePublisherRequest;
use Softwarescares\Intelilibrary\app\Http\Requests\UpdatePublisherRequest;
use Softwarescares\Intelilibrary\app\Models\Publisher;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class PublisherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Publisher $publisher, Card $card)
    {
        return $card->card($publisher, Publisher::with("books")->get() , ["avatar","publisher","phone"], ["avatar" => 'image'],
           [
            'store' => "library/publisher/store",
            'update' => "library/publisher/update",
            "delete" => "library/publisher/destroy"
            ]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Publisher $publisher, Form $form)
    {
        return $form->form($publisher, [
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "library/publisher/store",
            'update' => "library/publisher/update",
            "delete" => "library/publisher/destroy"
            ]
           ); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePublisherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePublisherRequest $request, Publisher $publisher, Store $store)
    {
        $publisher = $store->store($request, $publisher);

        return response()->json($publisher);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisher  $Publisher
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisher $publisher)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePublisherRequest  $request
     * @param  \App\Models\Publisher  $Publisher
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePublisherRequest $request, Publisher $publisher, Update $update)
    {
        $publisher = $update->update($request, $publisher,["id" => $request->input("id")]);

        return response()->json($publisher);  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Publisher $publisher, Delete $delete)
    {
        $publisher = $delete->delete($request, $publisher,["id" => $request->input("id")]);

        return response()->json($publisher);
    }
}
