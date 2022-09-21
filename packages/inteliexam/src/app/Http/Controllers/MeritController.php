<?php

namespace Softwarescares\Inteliexam\app\Http\Controllers;

use Softwarescares\Inteliexam\app\Models\Merit;
use Softwarescares\Inteliexam\app\Http\Requests\StoreMeritRequest;
use Softwarescares\Inteliexam\app\Http\Requests\UpdateMeritRequest;

use DB;

class MeritController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $merits = DB::table('merits')
                     ->select("*")
                     ->join("students","merits.student_id","=","students.id")
                     ->join("subjects","merits.subject_id","=","subjects.id")
                     ->join("grades","merits.marks",">=","grades.min_marks","merits.marks","<=","grades.max_marks")
                     ->get();

        return response()->json($merits);
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
     * @param  \App\Http\Requests\StoreMeritRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMeritRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Merit  $merit
     * @return \Illuminate\Http\Response
     */
    public function show(Merit $merit)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Merit  $merit
     * @return \Illuminate\Http\Response
     */
    public function edit(Merit $merit)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMeritRequest  $request
     * @param  \App\Models\Merit  $merit
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMeritRequest $request, Merit $merit)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Merit  $merit
     * @return \Illuminate\Http\Response
     */
    public function destroy(Merit $merit)
    {
        //
    }
}
