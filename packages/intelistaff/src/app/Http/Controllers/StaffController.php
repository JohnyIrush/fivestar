<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use App\Models\User;
use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Http\Requests\StoreStaffRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Stream;
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

        $teacher = null;
        $section = null;
        $stream =  null;
        $level = null;

        if(User::find(22)->staff->category_id == 1)
        {
            $teacherid =  Staff::find(User::find($userid)->staff->id)->teacher->id;
            $teacher = Teacher::with("subjects","department","levels","hostel")->where("id", $teacherid)->get();
            $section = Teacher::find($teacherid)->section;
            $stream =  ($section == null)? null : Stream::find($section->stream_id);
            $level = ($section == null)? null : Level::find($section->level_id);
        }

        return response()->json(["details" => $details, "teacher" => $teacher, "stream" => $stream, "level" => $level]);
    }
}
