<?php

namespace Softwarescares\Inteliadmission\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Models\Staff;

use Softwarescares\Intelicommunication\app\Models\Communication;

use Softwarescares\Inteliadmission\app\Models\Status;

use App\Models\User;
use Softwarescares\Inteliadmission\app\Models\ApplicantType;
use Softwarescares\Inteliadmission\app\Models\Applicant;
use Softwarescares\Inteliadmission\app\Http\Requests\StoreApplicantRequest;
use Softwarescares\Inteliadmission\app\Http\Requests\UpdateApplicantRequest;


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

class ApplicantController extends Controller
{

    public function statistics(Applicant $applicant, Statistic $statistic, Staff $staff)
    {
        return response()->json(
            [
             $statistic->statistic($applicant, ["applicant_type_id" => 2],  "Number of Student Applicants", "Total Number of Student Apllications", '<i class="fas fa-user-graduate"></i><i class="fas fa-envelope-open-text"></i>'),


             $statistic->statistic($applicant, ["applicant_type_id" => 1],  "Number of Staff Applicants", "Total Number of Staff Apllications", '<i class="fas fa-users"></i><i class="fas fa-envelope-open-text"></i>'),

            ]
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Applicant $applicant, Table $table, User $user, ApplicantType $applicantType, Form $form, CommunicationController $communicationController, Communication $communication)
    {
        $merged = [];

        return $table->table(
            $applicant, 
            DB::table("applicants")
                     ->join('applicant_types', 'applicants.applicant_type_id','=', "applicant_types.id")
                     ->join('users', "applicants.user_id", '=', 'users.id')
                     ->select("applicants.*","applicant_types.type","users.name","users.email","users.phone","users.profile_photo_path")
                     ->get()
            ,
            [], 
            $table->merged(
                [
                  [
                    "except" => ["id","status","google_form_template_id","description","created_at","updated_at",],
                    "model" => $applicantType
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
            'store' => "admission/applicant/store",
            'update' => "admission/applicant/update",
            "delete" => "admission/applicant/destroy"
           ],
           ["created_at","updated_at","applicant_type_id","user_id","id"],
           true,
           [
            "applicant_type_id" => [
                "name" => "type",
                "value" => "id",
                "column" => "applicant_type_id",
                "options" => ApplicantType::all()
            ]
           ],
           [$this->applicationResponseCreate($applicant, $form), $communicationController->create($communication, $form)]
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

    public function applicationResponseCreate(Applicant $applicant, Form $form)
    {
       return $form->form($applicant,[
            "status" => [
                "status" => Status::all(),
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]],
            ['id','created_at', 'updated_at',"applicant_type_id","user_id","status_id"], 
            [
            'store' => "admission/applicant/store",
            'update' => "admission/applicant/update",
            "delete" => "admission/applicant/destroy"
            ],[["field"=>"status","type" => "int"]]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreApplicantRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreApplicantRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateApplicantRequest  $request
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateApplicantRequest $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
