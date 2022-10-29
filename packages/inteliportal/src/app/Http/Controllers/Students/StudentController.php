<?php

namespace Softwarescares\Inteliportal\app\Http\Controllers\Students;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Softwarescares\Inteliacademic\app\Http\Controllers\QualificationController;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliinventory\app\Models\Hostel;
use Softwarescares\Inteliportal\app\Http\Controllers\Controller;
use Softwarescares\Inteliportal\app\Http\Requests\StoreStudentRequest;
use Softwarescares\Inteliportal\app\Http\Requests\UpdateStudentRequest;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Models\Teacher;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Student::with("user")->get());
        //(new Softwarescares\Inteliportal\app\Http\Controllers\Students\StudentController())->getDetails();
    }

    public function signupForm()
    {
        return Inertia::render('Auth/Register', 
            ['type' => 'student', 'type_id' => 3]);
    }

    public function getDetails()
    {
        $id = 1;
        $studentid = User::find($id)->student->id;
        $details = Student::with(["user","stream","level","hostel", "guardian", "subjects","clubs","sports","gender"])->where("user_id", $id)->get();
        $account = User::with(["account","payments","deposits","withdrawals"])->where("id", $id)->get();
        $classteacher = Staff::find(Section::find(Student::find($studentid)->section_id)->teacher->id);
        $master = Staff::find(Hostel::find(Student::find($studentid)->hostel_id)->teacher->id);

        return response()->json(["details" => $details,"account" => $account, "master" => $master, "classteacher" => $classteacher] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentRequest $request, Student $student)
    {

        $student = Student::create(
            [
                "user_id" => $request->input("user_id"),
                "firstname" => $request->input("firstname"),
                "lastname" => $request->input("lastname"),
                "bio" => $request->input("bio"),
                "guardian_id" => $request->input("guardian_id"),
                "gender_id" => $request->input("gender_id"),
                "address" => $request->input("address"),
                "leaders_id" => $request->input("leadership_id"),

                //'age' => "",
                'dob' => $request->input("birthday"),

                 "city_id" => $request->input("city_id"),
                 "town_id" => $request->input("town_id"),


                //"Admno" => 0,
                "section_id" => Section::where(["level_id" => $request->input("level_id"),"stream_id" => $request->input("stream_id")])->get("id")[0]->id,
                "stream_id" => $request->input("stream_id"),
                "level_id" => $request->input("level_id"),

                "hostel_id" => $request->input("hostel_id"),

                "type" => 'student'
        ]);

        return $student;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentRequest  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentRequest $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
