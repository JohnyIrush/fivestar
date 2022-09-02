<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Illuminate\Http\Request;
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Subject::all());
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSubjectRequest $request, Subject $subject,Store $store)
    {
        $subject = $store->store($request, $subject);

        return response()->json($subject);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSubjectRequest $request, Subject $subject, Update $update)
    {
        $subject = $update->update($request, $subject,["id" => $request->input("id")]);

        return response()->json($subject);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Subject $subject, Delete $delete)
    {
        $subject = $delete->delete($request, $subject,["id" => $request->input("id")]);

        return response()->json($subject);

    }
}
