<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreStreamRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateStreamRequest;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class StreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Stream $stream, Table $table)
    {

        return $table->table(
            $stream, 
            Stream::all()
            ,
            [], 
            []
           , 
           ["avatar" => "image"],
           [
            'store' => "academic/stream/store",
            'update' => "academic/stream/update",
            "delete" => "academic/stream/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Stream $stream, Form $form)
    {
        return $form->form($stream, 
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
