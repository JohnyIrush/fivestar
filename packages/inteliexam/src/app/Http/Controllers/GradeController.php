<?php

namespace Softwarescares\Inteliexam\app\Http\Controllers;

use Softwarescares\Inteliexam\app\Models\Grade;
use Softwarescares\Inteliexam\app\Http\Requests\StoreGradeRequest;
use Softwarescares\Inteliexam\app\Http\Requests\UpdateGradeRequest;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Grade $grade, Table $table)
    {
        return $table->table(
            $grade, 
            Grade::all()
            ,
            [], 
            []
           , 
           [],
           [
            'store' => "exam/grade/store",
            'update' => "exam/grade/update",
            "delete" => "exam/grade/destroy"
           ],
           ["created_at","updated_at"],
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Grade $grade, Form $form)
    {
        return $form->form($grade, [],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "exam/grade/store",
            'update' => "exam/grade/update",
            "delete" => "exam/grade/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreGradeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGradeRequest $request, Grade $grade, Store $store)
    {
        $grade = $store->store($request, $grade);

        return response()->json($grade);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Grade $grade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Grade $grade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGradeRequest  $request
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGradeRequest $request, Grade $grade, Update $update)
    {
        $grade = $update->update($request, $grade,["id" => $request->input("id")]);

        return response()->json($grade);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grade  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Grade $grade, Delete $delete)
    {
        $grade = $delete->delete($request, $grade,["id" => $request->input("id")]);

        return response()->json($grade);
    }
}
