<?php

namespace Softwarescares\Inteliinstaller\app\Http\Controllers;

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Softwarescares\Inteliinstaller\app\Models\Inteli;
use Softwarescares\Inteliinstaller\app\Http\Requests\StoreInteliRequest;
use Softwarescares\Inteliinstaller\app\Http\Requests\UpdateInteliRequest;

class InteliController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(Inteli::with("features")->get());
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
     * @param  \App\Http\Requests\StoreInteliRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreInteliRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Inteli  $inteli
     * @return \Illuminate\Http\Response
     */
    public function show(Inteli $inteli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Inteli  $inteli
     * @return \Illuminate\Http\Response
     */
    public function edit(Inteli $inteli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInteliRequest  $request
     * @param  \App\Models\Inteli  $inteli
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInteliRequest $request, Inteli $inteli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Inteli  $inteli
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inteli $inteli)
    {
        //
    }

    /**
     * Create School database.
     *
     * @return \Illuminate\Http\Response
     */
    public function createDatabase(StoreInteliRequest $request)
    {
        #$db =  DB::raw('CREATE DATABASE '.$request->name);
        #return $db;
        #Artisan::call("infyom:scaffold", ['name' => $request['name'], '--fieldsFile' => 'public/Product.json']);
        $charset = config("database.connections.mysql.charset",'utf8mb4');
        $collation = config("database.connections.mysql.collation",'utf8mb4_unicode_ci');
        $query = "CREATE DATABASE IF NOT EXISTS $request->name CHARACTER SET $charset COLLATE $collation;";

        return DB::statement($query);


    }

    public function configureInteliDatabase(StoreInteliRequest $request)
    {
        #$connection =
        #array_push(config("database.connections"), $connection);
    }

    public function runInteliMigration(StoreInteliRequest $request)
    {

    }

    public function runInteliSeeder(StoreInteliRequest $request)
    {

    }

}
