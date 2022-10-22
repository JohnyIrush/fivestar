<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\Form as FormModel;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormRequest;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(FormModel $formModel, Form $form)
    {
        return $form->form($formModel, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "form/store",
            'update' => "form/update",
            "delete" => "form/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormRequest $request)
    {
        $formTemplate = [];
        //return response()->json($request->input("sections"));
    
        $form = FormModel::updateOrCreate(
            ['id' => $request->id],
            [
            "title" => $request->title,
            "user_id" => 1,//$request->user_id,
            "form_template_id" => 1, //$request->form_template_id
            "cover" => $request->cover,
            "description" => $request->description,
            "sections" => json_encode($request->input("sections"))
           ]
        );

        $formTemplate['id'] = $form->id;
        $formTemplate['title'] = $form->title;
        $formTemplate['form_template_id'] = $form->form_template_id;
        $formTemplate['description'] = $form->description;
        $formTemplate['cover'] = $form->cover;
        $formTemplate['sections'] = $form->sections;


        return json_encode($formTemplate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function show(FormModel $formModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function edit(FormModel $formModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormRequest  $request
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormRequest $request, FormModel $formModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $form
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormModel $formModel)
    {
        //
    }
}
