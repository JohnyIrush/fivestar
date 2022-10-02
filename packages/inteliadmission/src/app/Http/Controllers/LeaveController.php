<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers;

use App\Models\User;
use Softwarescares\Inteliadmission\app\Models\Status;
use Softwarescares\Inteliadmission\app\Models\LeaveType;
use Softwarescares\Intelicommunication\app\Models\Communication;
use Softwarescares\Inteliadmission\app\Models\Leave;
use Softwarescares\Inteliadmission\app\Http\Requests\StoreLeaveRequest;
use Softwarescares\Inteliadmission\app\Http\Requests\UpdateLeaveRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

use Softwarescares\Intelicommunication\app\Http\Controllers\CommunicationController;

use Softwarescares\Inteliacademic\app\plugins\Model\Statistic;

class LeaveController extends Controller
{
    public function statistics(Leave $leave, Statistic $statistic)
    {
        return response()->json(
            [
             $statistic->statistic($leave, ["leave_type_id" => 2],  "Number of Student Leaves", "Total Number of Leaves", '<i class="fas fa-user-graduate"></i><i class="fas fa-question-circle"></i></i>'),


             $statistic->statistic($leave, ["leave_type_id" => 1],  "Number of Staff Leaves", "Total Number of Staff Leaves", '<i class="fas fa-users"></i><i class="fas fa-question-circle"></i></i>'),

            ]
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Leave $leave, Table $table, User $user, LeaveType $leaveType, Form $form, CommunicationController $communicationController, Communication $communication)
    {
        $merged = [];

        return $table->table(
            $leave, 
            DB::table("leaves")
                     ->join('leave_types', 'leaves.leave_type_id','=', "leave_types.id")
                     ->join('users', "leaves.user_id", '=', 'users.id')
                     ->select("leaves.*","leave_types.type","users.name","users.email","users.phone","users.profile_photo_path")
                     ->get()
            ,
            [], 
            $table->merged(
                [
                  [
                    "except" => ["id","status","google_form_template_id","description","created_at","updated_at",],
                    "model" => $leaveType
                  ], 
                  [
                    "except" => ["id","status","current_team_id","remember_token","provider_id","provider_id","provider","two_factor_recovery_codes","two_factor_secret","password","email_verified_at","created_at","updated_at",],
                    "model" => $user, 
                  ],
                  ], 
                  $merged,
                [])
           , 
           ["profile_photo_path" => "image"],
           [
            'store' => "admission/leave/store",
            'update' => "admission/leave/update",
            "delete" => "admission/leave/destroy"
           ],
           ["created_at","updated_at","leave_type_id","user_id","id"],
           true,
           [
            "leave_type_id" => [
                "name" => "type",
                "value" => "id",
                "column" => "leave_type_id",
                "options" => LeaveType::all()
            ]
           ],
           [$this->leaveResponseCreate($leave, $form), $communicationController->create($communication, $form)]
        );
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

    public function leaveResponseCreate(Leave $leave, Form $form)
    {
       return $form->form($leave,[
            "status" => [
                "status" => Status::all(),
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]],
            ['id','created_at', 'updated_at',"leave_type_id","status_id"], 
            [
            'store' => "admission/leave/store",
            'update' => "admission/leave/update",
            "delete" => "admission/leave/destroy"
            ],[["field"=>"status","type" => "int"]]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLeaveRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLeaveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function show(Leave $leave)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function edit(Leave $leave)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLeaveRequest  $request
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLeaveRequest $request, Leave $leave)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Leave  $leave
     * @return \Illuminate\Http\Response
     */
    public function destroy(Leave $leave)
    {
        //
    }
}
