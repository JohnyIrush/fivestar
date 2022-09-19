<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Models\Occupation;
use Softwarescares\Intelistaff\app\Models\Category;
use Softwarescares\Inteliportal\app\Models\Gender;

use App\Models\User;
use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Http\Requests\StoreStaffRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateStaffRequest;
use Inertia\Inertia;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Intelistaff\app\Http\Controllers\Controller;
use Softwarescares\Intelistaff\app\Models\Teacher;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class StaffController extends Controller
{
    public function index(Staff $staff, Table $table, User $user, Teacher $teacher, Gender $gender, Category $category, Occupation $occupation)
    {
        $merged = [];

        return $table->table(
            $staff, 
            DB::table("staff")
            ->join("users", "staff.user_id","=","users.id")
            ->join("teachers", "staff.id","=","teachers.staff_id")
            ->join("categories", "staff.category_id","=","categories.id")
            ->join("genders", "staff.gender_id","=","genders.id")
            ->join("occupations", "staff.occupation_id","=","occupations.id")
            ->select("staff.id","staff.firstname","staff.lastname","staff.career","staff.address","staff.title","users.profile_photo_path","genders.gender","categories.category","occupations.occupation")
            ->get()
            ,
            [], 
            $table->merged(
                [
                  [
                    "except" => ["id","status"],
                    "model" => $user
                  ], 
                  [
                    "except" => ["id","status"],
                    "model" => $teacher, 
                  ],
                  [
                    "except" => ["id","status"],
                    "model" => $gender, 
                  ],
                  [
                    "except" => ["id","status"],
                    "model" => $category, 
                  ],
                  [
                    "except" => ["id","status"],
                    "model" => $occupation, 
                  ],
                  ], 
                  $merged,
                ["firstname","lastname","career","address",
                "title","profile_photo_path","gender",
                "category","occupation"])
           , 
           ["profile_photo_path" => "image"],
           [
            'store' => "staff/store",
            'update' => "staff/update",
            "delete" => "staff/destroy"
           ],
           ["bio","user_id","gender_id","created_at","updated_at","category_id","type","occupation_id"]
        );
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Staff $staff,Form $form)
    {
        return $form->form($staff, 
            [
            "user_id" => [ 
                "user_id" => User::all(),
                "name" => "name",
                "value" => "id",
                "limit" => 1,
                 ],
            "gender_id" => [
                "gender_id" =>Gender::all(),
                "name" => "gender",
                "value" => "id",
                "limit" => 1,
                ],
            "category_id" => [
                "category_id" => Category::all(),
                "name" => "category",
                "value" => "id",
                "limit" => 1,
                ],
            "occupation_id" => [
                "occupation_id" => Occupation::all(),
                "name" => "occupation",
                "value" => "id",
                "limit" => 1,
                ],
            ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "staff/store",
            'update' => "staff/update",
            "delete" => "staff/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreOccupationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStaffRequest $request, Staff $staff, Store $store)
    {
        $staff = $store->store($request, $staff);
 
        return response()->json($staff);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function edit(Staff $staff)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateOccupationRequest  $request
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStaffRequest $request, Staff $staff, Update $update)
    {
        $staff = $update->update($request, $staff,["id" => $request->input("id")]);

        return response()->json($update);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Occupation  $occupation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Staff $staff, Delete $delete)
    {
        $staff = $delete->delete($request, $staff,["id" => $request->input("id")]);

        return response()->json($staff);

    }
}
