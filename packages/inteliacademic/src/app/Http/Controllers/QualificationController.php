<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreQualificationRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateQualificationRequest;
use Softwarescares\Inteliacademic\app\Models\Qualification;
use Softwarescares\Inteliacademic\app\Models\Subject;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class QualificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Qualification $qualification, Form $form)
    {
        return $form->form($qualification, [
                [
                "subject_id" => Subject::all(),
                "name" => "subject",
                "value" => "id",
                "limit" => 10,
                 ],
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/qualification/store",
            'update' => "academic/qualification/update",
            "delete" => "academic/qualification/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQualificationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQualificationRequest $request, Qualification $qualification, Store $store)
    {
        $qualification = $store->store($request, $qualification);
        //Qualification::find($qualification->id)->subjects()->attach($request->input("subjects"));

        return response()->json($qualification);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function show(Qualification $qualification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function edit(Qualification $qualification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQualificationRequest  $request
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQualificationRequest $request, Qualification $qualification, Update $update)
    {
        //$qualification->subjects()->attach($request->input("subjects"));

        $qualification = $update->update($request, $qualification,["id" => $request->input("id")]);

        return response()->json($qualification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qualification  $qualification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Qualification $qualification, Delete $delete)
    {
        $qualification = $delete->delete($request, $qualification,["id" => $request->input("id")]);

        return response()->json($qualification);

    }
}
