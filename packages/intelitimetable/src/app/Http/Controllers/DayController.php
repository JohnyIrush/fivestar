<?php

namespace Softwarescares\Intelitimetable\app\Http\Controllers;

use Softwarescares\Intelitimetable\app\Http\Controllers\Controller;
use Softwarescares\Intelitimetable\app\Models\Day;
use Softwarescares\Intelitimetable\app\Http\Requests\StoreDayRequest;
use Softwarescares\Intelitimetable\app\Http\Requests\UpdateDayRequest;
use Softwarescares\Intelitimetable\app\Models\DaySession;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class DayController extends Controller
{
    /**
     * Display a listing of the Day resource.
     *
     * 
     */
    public function days()
    {
        return Day::with('daySession')->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Day $day, Table $table)
    {
        return $table->table(
            $day, 
            Day::all()
            ,
            [], 
            []
           , 
           ["avatar" => "image"],
           [
            'store' => "timetable/day/store",
            'update' => "timetable/day/update",
            "delete" => "timetable/day/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Day $day, Form $form)
    {
        return $form->form($day, [
            "status" => [
                "status" => [["id" => 0,"status" => "InActive"],["id" => 1, "status" =>"Active"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "timetable/day/store",
            'update' => "timetable/day/update",
            "delete" => "timetable/day/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAssignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDayRequest $request, Day $day, Store $store)
    {
        $day = $store->store($request, $day);

        return response()->json($day);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Day $day)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Day $day)
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
    public function update(UpdateDayRequest $request, Day $day, Update $update)
    {
        $day = $update->update($request, $day,["id" => $request->input("id")]);

        return response()->json($day);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Day $day, Delete $delete)
    {
        $day = $delete->delete($request, $day,["id" => $request->input("id")]);

        return response()->json($day);

    }
}
