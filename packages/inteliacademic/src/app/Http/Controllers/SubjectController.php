<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Controllers\Controller;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreSubjectRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateSubjectRequest;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class SubjectController extends Controller
{
    /**
     * Display a listing of the Subject resource.
     *
     * 
     */
    public function index(Subject $subject, Table $table)
    {

        return $table->table(
            $subject, 
            Subject::with(['teachers','levels','department'])->get()
            ,
            [], 
            []
           , 
           ["avatar" => "image"],
           [
            'store' => "academic/subject/store",
            'update' => "academic/subject/update",
            "delete" => "academic/subject/destroy"
           ],
           ["created_at","updated_at"]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Subject $subject, Form $form)
    {
        return $form->form($subject, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/subject/store",
            'update' => "academic/subject/update",
            "delete" => "academic/subject/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStreamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectRequest $request, Subject $subject, Store $store)
    {
        $subject = $store->store($request, $subject);

        return response()->json($subject);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
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
    public function update(UpdateSubjectRequest $request, Subject $subject, Update $update)
    {
        $subject = $update->update($request, $subject,["id" => $request->input("id")]);

        return response()->json($subject);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stream  $stream
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Subject $subject, Delete $delete)
    {
        $subject = $delete->delete($request, $subject,["id" => $request->input("id")]);

        return response()->json($subject);

    }
}
