<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreStreamRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateStreamRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Stream::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Stream $stream, Form $form)
    {
        return $form->form($stream, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/stream/store",
            'update' => "academic/stream/update",
            "delete" => "academic/stream/destroy"
            ]
           );
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStreamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStreamRequest $request, Stream $stream, Store $store)
    {
        $stream = $store->store($request, $stream);

        return response()->json($stream);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function show(Stream $stream)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function edit(Stream $stream)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStreamRequest  $request
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStreamRequest $request, Stream $stream, Update $update)
    {
        $stream = $update->update($request, $stream,["id" => $request->input("id")]);

        return response()->json($stream);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Stream $stream, Delete $delete)
    {
        $stream = $delete->delete($request, $stream,["id" => $request->input("id")]);

        return response()->json($stream);

    }
}
