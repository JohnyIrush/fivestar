<?php

namespace Softwarescares\Intelitimetable\app\Http\Controllers;

use Softwarescares\Intelitimetable\app\Http\Controllers\Controller;

use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Intelitimetable\app\Models\Venue;
use Softwarescares\Intelitimetable\app\Http\Requests\StoreVenueRequest;
use Softwarescares\Intelitimetable\app\Http\Requests\UpdateVenueRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Venue $venue, Table $table)
    {
        return $table->table(
            $venue, 
            Venue::all()
            ,
            [], 
            []
           , 
           ["avatar" => "image"],
           [
            'store' => "timetable/venue/store",
            'update' => "timetable/venue/update",
            "delete" => "timetable/venue/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Venue $venue, Form $form)
    {
        return $form->form($venue, [
            "status" => [
                "status" => [["id" => 0,"status" => "InActive"],["id" => 1, "status" =>"Active"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
                ],
                "section_id" => [
                    "section_id" => Section::all(),
                    "name" => "id",
                    "value" => "id",
                    "limit" => 1,
                 ],
                "subject_id" => [
                    "subject_id" => Subject::all(),
                    "name" => "subject",
                    "value" => "id",
                    "limit" => 1,
                 ],
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "timetable/venue/store",
            'update' => "timetable/venue/update",
            "delete" => "timetable/venue/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVenueRequest $request, Venue $venue, Store $store)
    {
        $venue = $store->store($request, $venue);

        return response()->json($venue);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Venue $venue)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Venue $venue)
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
    public function update(UpdateVenueRequest $request, Venue $venue, Update $update)
    {
        $venue = $update->update($request, $venue,["id" => $request->input("id")]);

        return response()->json($venue);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Venue $venue, Delete $delete)
    {
        $venue = $delete->delete($request, $venue,["id" => $request->input("id")]);

        return response()->json($venue);

    }
}
