<?php

namespace Softwarescares\Inteliacademic\app\Http\Controllers;

use Softwarescares\Inteliacademic\app\Http\Controllers\Controller;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Http\Requests\StoreLevelRequest;
use Softwarescares\Inteliacademic\app\Http\Requests\UpdateLevelRequest;
use Softwarescares\Inteliacademic\app\Models\Teacher;

use Illuminate\Http\Request;

use Softwarescares\Inteli\app\Actions\Model\Store;
use Softwarescares\Inteli\app\Actions\Model\Update;
use Softwarescares\Inteli\app\Actions\Model\Delete;

use Softwarescares\Inteli\app\Plugins\Model\Form;
use Softwarescares\Inteli\app\Plugins\Model\Table;
use Softwarescares\Inteli\app\Plugins\Model\Card;

use Softwarescares\Inteliacademic\app\plugins\Model\Detail;

class LevelController extends Controller
{
    public function levels()
    {
        foreach(Teacher::with('levels')->get() as $teacher)
        {
            $levels = $teacher->levels;
            #return response()->json($levels);
            #return response()->json($levels->levels);
            foreach($levels as $level)
            {
                foreach (Level::find($level->id)->with('streams')->get() as $streams)
                {
                    $arr = [];
                    return response()->json(Level::find($level->id)->with('streams')->get());
                    $streams = isset($streams->streams)? $streams->streams : [];
                    foreach ($streams as $stream)
                    {
                        array_push($arr, $stream->id);
                    }
                 
                    Teacher::find($teacher->id)->streams()->attach(array_rand($arr, 2));
                }
            }
        } 
    }

    public function detail(Request $request, Level $level, Detail $detail)
    {
        return $detail->detail($level, 
                               (array)$request->input("conditions"), 
                               "level", "", ["level"],
                               ["level" => "image"]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Level $level, Table $table)
    {
        return $table->table(
            $level, 
            Level::all()
            ,
            []
            ,
            []
           , 
           ["thumbnail" => "image"],
           [
            'store' => "academic/level/store",
            'update' => "academic/level/update",
            "delete" => "academic/level/destroy"
           ],
           ["created_at","updated_at"]
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Level $level, Form $form)
    {
        return $form->form($level,
            [
            "status" => [
                "status" => [["id" => 0,"status" => "False"],["id" => 1, "status" =>"True"]],
                "name" => "status",
                "value" => "id",
                "limit" => 1,
            ]]
            ,
            ['id','created_at', 'updated_at'], 
            [
            'store' => "academic/level/store",
            'update' => "academic/level/update",
            "delete" => "academic/level/destroy"
            ]
           );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLevelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLevelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function show(Level $level)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function edit(Level $level)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLevelRequest  $request
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLevelRequest $request, Level $level)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Level  $level
     * @return \Illuminate\Http\Response
     */
    public function destroy(Level $level)
    {
        //
    }
}
