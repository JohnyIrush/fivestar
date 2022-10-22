<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Models\Assignment;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Subject;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreAssignmentRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateAssignmentRequest;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;


class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Assignment $assignment, Table $table)
    {
        return $table->table(
            $assignment, 
            Assignment::all()
            ,
            [], 
            []
           , 
           ["avatar" => "image"],
           [
            'store' => "academic/assignment/store",
            'update' => "academic/assignment/update",
            "delete" => "academic/assignment/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Assignment $assignment, Form $form)
    {
        return $form->form($assignment, [
                "level_id" => [
                "level_id" => Level::all(),
                "name" => "level",
                "value" => "id",
                "limit" => 10,
                 ],
                "subject_id" =>[
                "subject_id" => Subject::all(),
                "name" => "subject",
                "value" => "id",
                "limit" => 1,
                 ],
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/assignment/store",
            'update' => "academic/assignment/update",
            "delete" => "academic/assignment/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssignmentRequest $request, Assignment $assignment, Store $store)
    {
        $assignment = $store->store($request, $assignment);

        return response()->json($assignment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssignmentRequest  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssignmentRequest $request, Assignment $assignment, Update $update)
    {
        $assignment = $update->update($request, $assignment,["id" => $request->input("id")]);

        return response()->json($assignment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Assignment $assignment, Delete $delete)
    {
        $assignment = $delete->delete($request, $assignment,["id" => $request->input("id")]);

        return response()->json($assignment);

    }
}
