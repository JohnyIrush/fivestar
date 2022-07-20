<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use App\Models\User;
use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Http\Requests\StoreStaffRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;
use Softwarescares\Intelistaff\app\Http\Controllers\Controller;
use Softwarescares\Intelistaff\app\Models\Teacher;

class StaffController extends Controller
{
    public function index()
    {
        return response()->json(Staff::with("user")->get());
    }

    public function getDetails()
    {
        $userid = 22;
        $details = Staff::with("user","occupation","category","gender")->where("user_id", $userid)->get();
        $teacherid =  Staff::find(User::find($userid)->staff->id)->teacher->id;
        $teacher = Teacher::with("subjects","department","section","levels")->where("id", $teacherid)->get();
        return response()->json(["details" => $details, "teacher" => $teacher]);
    }
}
