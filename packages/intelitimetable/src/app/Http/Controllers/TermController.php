<?php

namespace Softwarescares\Intelitimetable\app\Http\Controllers;

use Softwarescares\Intelitimetable\app\Models\Term;
use Softwarescares\Intelitimetable\app\Http\Requests\StoreTermRequest;
use Softwarescares\Intelitimetable\app\Http\Requests\UpdateTermRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Term $term, Table $table)
    {
        return $table->table(
            $term, 
            Term::all()
            ,
            [], 
            []
           , 
           ["avatar" => "image"],
           [
            'store' => "timetable/term/store",
            'update' => "timetable/term/update",
            "delete" => "timetable/term/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Term $term, Form $form)
    {
        return $form->form($term, [
            "status" => [
                "status" => [["id" => 0,"status" => "InActive"],["id" => 1, "status" =>"Active"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "timetable/term/store",
            'update' => "timetable/term/update",
            "delete" => "timetable/term/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTermRequest $request, Term $term, Store $store)
    {
        $term = $store->store($request, $term);

        return response()->json($term);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Term $term)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Term $term)
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
    public function update(UpdateTermRequest $request, Term $term, Update $update)
    {
        $term = $update->update($request, $term,["id" => $request->input("id")]);

        return response()->json($term);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Term $term, Delete $delete)
    {
        $term = $delete->delete($request, $term,["id" => $request->input("id")]);

        return response()->json($term);

    }
}
