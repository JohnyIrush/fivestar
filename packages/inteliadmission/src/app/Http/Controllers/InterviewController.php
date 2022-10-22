<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers;

use Softwarescares\Inteliadmission\app\Models\Status;
use Softwarescares\Inteliadmission\app\Models\InterviewType;
use Softwarescares\Intelicommunication\app\Models\Communication;
use App\Models\User;
use Softwarescares\Inteliadmission\app\Models\Interview;
use Softwarescares\Inteliadmission\app\Http\Requests\StoreInterviewRequest;
use Softwarescares\Inteliadmission\app\Http\Requests\UpdateInterviewRequest;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

use Softwarescares\Intelicommunication\app\Http\Controllers\CommunicationController;

use Softwarescares\Inteliacademic\app\plugins\Model\Statistic;

class InterviewController extends Controller
{
    public function statistics(Interview $interview, Statistic $statistic)
    {
        return response()->json(
            [
             $statistic->statistic($interview, ["interview_type_id" => 2],  "Number of Student Interviews", "Total Number of interviews", '<i class="fas fa-user-graduate"></i><i class="fas fa-question-circle"></i></i>'),


             $statistic->statistic($interview, ["interview_type_id" => 1],  "Number of Staff Interviews", "Total Number of Staff Interviews", '<i class="fas fa-users"></i><i class="fas fa-question-circle"></i></i>'),

            ]
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Interview $interview, Table $table, User $user, InterviewType $interviewType, Form $form, CommunicationController $communicationController, Communication $communication)
    {
        $merged = [];

        return $table->table(
            $interview, 
            DB::table("interviews")
                     ->join('interview_types', 'interviews.interview_type_id','=', "interview_types.id")
                     ->join('applicants', "interviews.applicant_id", '=', 'applicants.id') 
                     ->join('users', "applicants.user_id", '=', 'users.id')
                     ->select("interviews.*","interview_types.type","users.name","users.email","users.phone","users.profile_photo_path")
                     ->get()
            ,
            [], 
            $table->merged(
                [
                  [
                    "except" => ["id","status","google_form_template_id","description","created_at","updated_at",],
                    "model" => $interviewType
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
            'store' => "admission/interview/store",
            'update' => "admission/interview/update",
            "delete" => "admission/interview/destroy"
           ],
           ["created_at","updated_at","interview_type_id","user_id","id","applicant_id"],
           true,
           [
            "interview_type_id" => [
                "name" => "type",
                "value" => "id",
                "column" => "interview_type_id",
                "options" => InterviewType::all()
            ]
           ],
           [$this->interviewResponseCreate($interview, $form), $communicationController->create($communication, $form)]
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

    public function interviewResponseCreate(Interview $interview, Form $form)
    {
       return $form->form($interview,[
            "status" => [
                "status" => Status::all(),
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]],
            ['id','created_at', 'updated_at',"interview_type_id","status_id","applicant_id"], 
            [
            'store' => "admission/interview/store",
            'update' => "admission/interview/update",
            "delete" => "admission/interview/destroy"
            ],[["field"=>"status","type" => "int"]]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInterviewRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInterviewRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function show(Interview $interview)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function edit(Interview $interview)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInterviewRequest  $request
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInterviewRequest $request, Interview $interview)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Interview  $interview
     * @return \Illuminate\Http\Response
     */
    public function destroy(Interview $interview)
    {
        //
    }
}
