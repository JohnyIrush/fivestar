<?php

namespace Softwarescares\Inteliexam\app\Http\Controllers;

use Softwarescares\Intelitimetable\app\Models\Term;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliexam\app\Models\Exam;
use Softwarescares\Inteliexam\app\Http\Requests\StoreExamRequest;
use Softwarescares\Inteliexam\app\Http\Requests\UpdateExamRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Exam $exam, Table $table, Level $level, Term $term)
    {
        $merged = [];

        return $table->table(
            $exam, 
            DB::table("exams")
                     ->join('levels', "exams.level_id", '=', 'levels.id')
                     ->join('terms', "exams.term_id", '=', 'terms.id')
                     ->select("exams.*","levels.level","terms.term")
                     ->get()
            ,
            [], 
            $table->merged(
                [ 
                  [
                    "except" => ["id","status","start_date","end_date"],
                    "model" => $level,
                  ], 
                  [
                    "except" => ["id","status","start_date","end_date"],
                    "model" => $term,
                  ],
                  ], 
                  $merged,
                ["id","exam","level_id",
                 "term_id","level",
                 "term","start_date","end_date"])
           , 
           ["cover" => "image"],
           [
            'store' => "exam/store",
            'update' => "exam/update",
            "delete" => "exam/destroy"
           ],
           ["created_at","updated_at","level_id", "term_id"],
           true,
           [
            "level_id" => [
                "name" => "level",
                "value" => "id",
                "column" => "level_id",
                "options" => Level::all()
            ], 
            "term_id" => [
                "name" => "term",
                "value" => "id",
                "value" => "term_id",
                "options" => Term::all()
            ],
           ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Exam $exam, Form $form)
    {
        return $form->form($exam, [
                
                "level_id" => [
                   "level_id" => Level::all(),
                   "name" => "level",
                   "value" => "id",
                   "limit" => 1,
                 ],
                "term_id" => [
                   "term_id" => Term::all(),
                   "name" => "term",
                   "value" => "id",
                   "limit" => 1,
                 ],
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "exam/store",
            'update' => "exam/update",
            "delete" => "exam/destroy"
            ]
           );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreExamRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreExamRequest $request, Exam $exam, Store $store)
    {
        $exam = $store->store($request, $exam);

        return response()->json($exam);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateExamRequest  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateExamRequest $request, Exam $exam, Update $update)
    {
        $exam = $update->update($request, $exam,["id" => $request->input("id")]);

        return response()->json($exam);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,Exam $exam, Delete $delete)
    {
        $exam = $delete->delete($request, $exam,["id" => $request->input("id")]);

        return response()->json($exam);
    }
}
