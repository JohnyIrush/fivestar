<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Controllers\Controller;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreSubjectRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateSubjectRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

class SubjectController extends Controller
{
    /**
     * Display a listing of the Subject resource.
     *
     * 
     */
    public function index(Subject $subject, Table $table)
    {

        return $table->table(
            $subject, 
            Subject::with(['teachers','levels','department'])->get()
            ,
            [
            "status" => [
                "status" => [["id" => 0,"status" => "False"],["id" => 1, "status" =>"True"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ],
            ], 
            [
            ]
           , 
           ["avatar" => "image"],
           [
            'store' => "academic/subject/store",
            'update' => "academic/subject/update",
            "delete" => "academic/subject/destroy"
           ],
           ["created_at","updated_at"]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Subject $subject, Form $form)
    {
        return $form->form($subject, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/subject/store",
            'update' => "academic/subject/update",
            "delete" => "academic/subject/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function show(Subject $subject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function edit(Subject $subject)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubjectRequest  $request
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectRequest $request, Subject $subject)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subject  $subject
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subject $subject)
    {
        //
    }
}
