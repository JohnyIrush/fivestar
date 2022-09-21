<?php

namespace Softwarescares\Intelitimetable\app\Http\Controllers;

use Softwarescares\Intelitimetable\app\Http\Controllers\Controller;
use Softwarescares\Intelitimetable\app\Models\DaySession;
use Softwarescares\Intelitimetable\app\Http\Requests\StoreDaySessionRequest;
use Softwarescares\Intelitimetable\app\Http\Requests\UpdateDaySessionRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class DaySessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function daySession()
    {
        return DaySession::all();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DaySession $daySession, Table $table)
    {
        return $table->table(
            $daySession, 
            DaySession::all()
            ,
            [], 
            []
           , 
           ["avatar" => "image"],
           [
            'store' => "timetable/day/session/store",
            'update' => "timetable/day/session/update",
            "delete" => "timetable/day/session/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(DaySession $daySession, Form $form)
    {
        return $form->form($daySession, [
            "status" => [
                "status" => [["id" => 0,"status" => "InActive"],["id" => 1, "status" =>"Active"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "timetable/day/session/store",
            'update' => "timetable/day/session/update",
            "delete" => "timetable/day/session/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDaySessionRequest $request, DaySession $daySession, Store $store)
    {
        $daySession = $store->store($request, $daySession);

        return response()->json($daySession);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(DaySession $daySession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(DaySession $daySession)
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
    public function update(UpdateDaySessionRequest $request, DaySession $daySession, Update $update)
    {
        $daySession = $update->update($request, $daySession,["id" => $request->input("id")]);

        return response()->json($daySession);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, DaySession $daySession, Delete $delete)
    {
        $daySession = $delete->delete($request, $daySession,["id" => $request->input("id")]);

        return response()->json($daySession);

    }

}
