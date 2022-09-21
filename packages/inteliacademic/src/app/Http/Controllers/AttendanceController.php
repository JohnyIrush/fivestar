<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliinventory\app\Models\Hostel;
use Softwarescares\Inteliportal\app\Models\Gender;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Stream;
use App\Models\User;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Inteliacademic\app\Models\Attendance;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreAttendanceRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateAttendanceRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

use Illuminate\Database\Eloquent\Model;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Attendance $attendance, Table $table, Student $student, User $user,Stream $stream,Level $level, Gender $gender)
    {
        $merged = [];

        return $table->table(
            $attendance, 
            //Attendance::with(["student"])->get()
            DB::table("attendances")
                     ->join('students', 'attendances.student_id','=', "students.id")
                     ->join('users', "students.user_id", '=', 'users.id')
                     ->join('streams', "students.stream_id", '=', 'streams.id')
                     ->join('levels', "students.level_id", '=', 'levels.id')
                     ->join('genders', "students.gender_id", '=', 'genders.id')
                     ->select("attendances.id","users.profile_photo_path","students.Admno","levels.level","streams.stream","students.firstname","students.lastname","attendances.date","attendances.status", "students.section_id","students.stream_id","students.level_id", "students.gender_id", "students.hostel_id")
                     ->get()
            ,
            [
            /*"firstname" => [
                "name" => "student",
                "value" => "firstname",
                "display" => "item",
                "type" => "string"
            ],
            "lastname" => [
                "name" => "student",
                "value" => "lastname",
                "display" => "item",
                "type" => "string"
            ],
            "Admno" => [
                "name" => "student",
                "value" => "Admno",
                "display" => "item",
                "type" => "number"
            ]*/
           ], 
            $table->merged(
                [
                  [
                    "except" => ["id","status"],
                    "model" => $student
                  ], 
                  [
                    "except" => ["id","status"],
                    "model" => $user, 
                  ],
                  [
                    "except" => ["id","status"],
                    "model" => $stream,
                  ], 
                  [
                    "except" => ["id","status"],
                    "model" => $level,
                  ], 
                  [
                    "except" => ["id","status"],
                    "model" => $gender
                  ]
                  ], 
                  $merged,
                ["id","profile_photo_path","Admno",
                 "level","stream","firstname",
                 "lastname","date","status",
                 "section_id","stream_id",
                 "level_id","gender_id", "hostel_id"])
            /*[
               "field" => "firstname",
               "type" => "string"
            ],
            [
               "field" => "lastname",
               "type" => "string"
            ],
            [
               "field" => "Admno",
               "type" => "integer"
            ]*/
           , 
           ["status" => "form","profile_photo_path" => "image"],
           [
            'store' => "academic/attendance/store",
            'update' => "academic/attendance/update",
            "delete" => "academic/attendance/destroy"
           ],
           ["student_id","created_at","updated_at","section_id","stream_id","level_id", "gender_id","hostel_id"],
           true,
           [
            "stream_id" => [
                "name" => "stream",
                "value" => "id",
                "column" => "stream_id",
                "options" => Stream::all()
            ],
            "level_id" => [
                "name" => "level",
                "value" => "id",
                "column" => "level_id",
                "options" => Level::all()
            ], 
            "gender_id" => [
                "name" => "gender",
                "value" => "id",
                "value" => "gender_id",
                "options" => Gender::all()
            ],
            "hostel_id" => [
                "name" => "hostel",
                "value" => "id",
                "column" => "hostel_id",
                "options" => Hostel::all()
            ]
           ]
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
                "level_id" => [
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
