<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Models\Attendance;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreAttendanceRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateAttendanceRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Softwarescares\Inteliacademic\app\Models\Level;

use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Attendance $attendance, Table $table)
    {
        return $table->table(
            $attendance, 
            Attendance::with(["student"])->get(),
            [
            "student_id" => [
                "name" => "student",
                "value" => "firstname",
                "display" => "item"
            ],
            "lastname" => [
                "name" => "student",
                "value" => "lastname",
                "display" => "item"
            ],
            "Admno" => [
                "name" => "student",
                "value" => "Admno",
                "display" => "item"
            ]
        ]
            , ["lastname", "Admno"], ["status" => "form"],
           [
            'store' => "academic/attendance/store",
            'update' => "academic/attendance/update",
            "delete" => "academic/attendance/destroy"
            ],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Attendance $attendance, Form $form)
    {
        return $form->form($attendance, [
                [
                "level_id" => Level::all(),
                "name" => "level",
                "value" => "id",
                "limit" => 1,
                 ],
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/attendance/store",
            'update' => "academic/attendance/update",
            "delete" => "academic/attendance/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAttendanceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAttendanceRequest $request, Attendance $attendance, Store $store)
    {
        #return $request->all();

        $attendance = $store->store($request, $attendance);

        return response()->json($attendance);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAttendanceRequest  $request
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAttendanceRequest $request, Attendance $attendance, Update $update)
    {
        $attendance = $update->update($request, $attendance,["id" => $request->input("id")]);

        return response()->json($attendance);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Attendance $attendance, Delete $delete)
    {
        $assignment = $delete->delete($request, $assignment,["id" => $request->input("id")]);

        return response()->json($assignment);
    }
}
