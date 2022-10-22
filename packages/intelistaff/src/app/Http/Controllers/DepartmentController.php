<?php

namespace Softwarescares\Intelistaff\app\Http\Controllers;

use Softwarescares\Intelistaff\app\Http\Requests\StoreDepartmentRequest;
use Softwarescares\Intelistaff\app\Http\Requests\UpdateDepartmentRequest;
use Softwarescares\Intelistaff\app\Models\Department;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Department $department, Table $table)
    {

        return $table->table(
            $department, 
            Department::all()
            ,
            [], 
            []
           , 
           ["icon" => "image"],
           [
            'store' => "staff/department/store",
            'update' => "staff/department/update",
            "delete" => "staff/department/destroy"
           ],
           ["created_at","updated_at"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Department $department,Form $form)
    {
        return $form->form($department, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "staff/department/store",
            'update' => "staff/department/update",
            "delete" => "staff/department/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDepartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDepartmentRequest $request, Department $department, Store $store)
    {
        $department = $store->store($request, $department);
 
        return response()->json($department);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDepartmentRequest  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDepartmentRequest $request, Department $department, Update $update)
    {
        $department = $update->update($request, $department,["id" => $request->input("id")]);

        return response()->json($department);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Department $department, Delete $delete)
    {
        $department = $delete->delete($request, $department,["id" => $request->input("id")]);

        return response()->json($department);

    }
}
