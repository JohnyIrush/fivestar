<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Intelistaff\app\Models\Teacher;

use Softwarescares\Inteliacademic\app\Http\Requests\StoreSectionRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateSectionRequest;

use Softwarescares\Intelilibrary\app\Actions\Model\Store;
use Softwarescares\Intelilibrary\app\Actions\Model\Update;
use Softwarescares\Intelilibrary\app\Actions\Model\Delete;

use Softwarescares\Intelilibrary\app\Plugins\Model\Form;
use Softwarescares\Intelilibrary\app\Plugins\Model\Table;
use Softwarescares\Intelilibrary\app\Plugins\Model\Card;

use Illuminate\Http\Request;

use DB;

class SectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Section $section, Table $table, Level $level, Stream $stream)
    {
        $merged = [];

        return $table->table(
            $section, 
            DB::table("sections")
             ->join("levels","sections.level_id","=","levels.id")
             ->join("streams","sections.stream_id","=","streams.id")
             ->select("sections.id","sections.stream_id","sections.level_id","sections.thumbnail","levels.level","streams.stream")
             ->get()
            ,
            []
            ,
            $table->merged(
                [
                  [
                    "except" => ["id","status","thumbnail"],
                    "model" => $level
                  ], 
                  [
                    "except" => ["id","status","thumbnail"],
                    "model" => $stream,
                  ]],  
                  $merged,
                ["id","thumbnail",
                 "level","stream","firstname",
                "status","section_id","stream_id",
                 "level_id"])
           , 
           ["thumbnail" => "image"],
           [
            'store' => "academic/level/store",
            'update' => "academic/level/update",
            "delete" => "academic/level/destroy"
           ],
           ["created_at","updated_at","stream_id","level_id","teacher_id"]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Section $section, Form $form)
    {
        return $form->form($section, [
                "stream_id" => [
                "stream_id" => Stream::all(),
                "name" => "stream",
                "value" => "id",
                "limit" => 1,
                 ],
                "level_id" => [
                "level_id" => Level::all(),
                "name" => "level",
                "value" => "id",
                "limit" => 1,
                 ],
                "teacher_id" =>[
                "teacher_id" => DB::table("teachers")->join("staff", "teachers.staff_id","=","staff.id")->get(),
                "name" => "firstname",
                "value" => "id",
                "limit" => 1,
                 ],
    
            "status" => [
                "status" => [["id" => 0,"status" => "Inactive"],["id" => 1, "status" =>"Active"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ],
        ],
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/section/store",
            'update' => "academic/section/update",
            "delete" => "academic/section/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSectionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSectionRequest $request, Section $section, Store $store)
    {
        $section = $store->store($request, $section);

        return response()->json($section);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function show(Section $section)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function edit(Section $section)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSectionRequest  $request
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSectionRequest $request, Section $section, Update $update)
    {
        $section = $update->update($request, $section,["id" => $request->input("id")]);

        return response()->json($section);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Section  $section
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Section $section, Delete $delete)
    {
        $section = $delete->delete($request, $section,["id" => $request->input("id")]);

        return response()->json($section);

    }
}
