<?php

namespace Softwarescares\Inteliform\app\Http\Controllers;

use Softwarescares\Inteliform\app\Models\FieldSetting;
use Softwarescares\Inteliform\app\Http\Requests\StoreFieldSettingRequest;
use Softwarescares\Inteliform\app\Http\Requests\UpdateFieldSettingRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class FieldSettingController extends Controller
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
     * @param  \App\Http\Requests\StoreFieldSettingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFieldSettingRequest $request, Store $store, FieldSetting $fieldSetting)
    {
        $fieldSetting = $store->store($request, $fieldSetting);

        return response()->json($fieldSetting);
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FieldSetting  $fieldSetting
     * @return \Illuminate\Http\Response
     */
    public function show(FieldSetting $fieldSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FieldSetting  $fieldSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(FieldSetting $fieldSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFieldSettingRequest  $request
     * @param  \App\Models\FieldSetting  $fieldSetting
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFieldSettingRequest $request, FieldSetting $fieldSetting, Update $update)
    {
        $fieldSetting = $update->update($request, $fieldSetting,["id" => $request->input("id")]);

        return response()->json($fieldSetting);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FieldSetting  $fieldSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, FieldSetting $fieldSetting, Delete $delete)
    {
        $fieldSetting = $delete->delete($request, $fieldSetting,["id" => $request->input("id")]);

        return response()->json($fieldSetting);

    }
}
