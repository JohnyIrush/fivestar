<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FormSection;
use Softwarescares\Inteliform\app\Http\Requests\StoreFormSectionRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFormSectionRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class FormSectionController extends Controller
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
     * @param  \App\Http\Requests\StoreFormSectionRequest  $request
     * @return \Illuminate\Http\Response
     */

    public function store(StoreFormSectionRequest $request, Store $store, FormSection $formSection)
    {
        $formSection = $store->store($request, $formSection);

        return response()->json($formSection);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormSection  $formSection
     * @return \Illuminate\Http\Response
     */
    public function show(FormSection $formSection)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormSection  $formSection
     * @return \Illuminate\Http\Response
     */
    public function edit(FormSection $formSection)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormSectionRequest  $request
     * @param  \App\Models\FormSection  $formSection
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormSectionRequest $request, FormSection $formSection, Update $update)
    {
        $formSection = $update->update($request, $formSection,["id" => $request->input("id")]);

        return response()->json($formSection);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormSection  $formSection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, FormSection $formSection, Delete $delete)
    {
        $formSection::find($request->input("id"))->fields()->delete();

        $formSection = $delete->delete($request, $formSection,["id" => $request->input("id")]);

        return response()->json($formSection);

    }

}
