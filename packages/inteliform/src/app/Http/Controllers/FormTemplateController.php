<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FormTemplate;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormTemplateRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormTemplateRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

use Softwarescares\Inteliform\app\Http\Controllers\Controller;

class FormTemplateController extends Controller
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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFormTemplateRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormTemplateRequest $request, Store $store, FormTemplate $formTemplate)
    {
        /*
          foreach($request->votes as $candidate_id => $votes){
              Vote::updateOrCreate(
                  ['candidate_id' => $candidate_id],
                  ['votes' => $votes]
              );
          }
        */
        $formTemplate = $store->store($request, $formTemplate);

        return response()->json($formTemplate);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function show(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */
    public function edit(FormTemplate $formTemplate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormTemplateRequest  $request
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */

    public function update(UpdateFormTemplateRequest $request, FormTemplate $formTemplate, Update $update)
    {
        $formTemplate = $update->update($request, $formTemplate,["id" => $request->input("id")]);

        return response()->json($formTemplate);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormTemplate  $formTemplate
     * @return \Illuminate\Http\Response
     */

    public function destroy(Request $request, FormTemplate $formTemplate, Delete $delete)
    {
        $formTemplate = $delete->delete($request, $formTemplate,["id" => $request->input("id")]);

        return response()->json($formTemplate);

    }
}
