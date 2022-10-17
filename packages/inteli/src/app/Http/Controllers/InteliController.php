<?php

namespace Softwarescares\Inteli\app\Http\Controllers;

use Softwarescares\Inteli\app\Models\Inteli;
use Softwarescares\Inteli\app\Http\Requests\StoreInteliRequest;
use Softwarescares\Inteli\app\Http\Requests\UpdateInteliRequest;

class InteliController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $dbname = implode(explode(" ",$request->sch_name));//trim($request->sch_name);
        $charset = config("database.connections.mysql.charset",'utf8mb4');
        $collation = config("database.connections.mysql.collation",'utf8mb4_unicode_ci');
        $query = "CREATE DATABASE IF NOT EXISTS $dbname CHARACTER SET $charset COLLATE $collation;";

        DB::statement($query);

        event(new SystemDatabaseCreatedEvent(['databasename' => $dbname]));
    }

    public function configureInteliDatabase(StoreInteliRequest $request)
    {
        $dbname = $request["databasename"];

        $connection =   [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('', $dbname),
            'username' => env('DB_USERNAME_INTELI', 'forge'),
            'password' => env('DB_PASSWORD_INTELI', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ];

        config("database.connections")[$dbname] = [];

        config("database.connections")[$request["databasename"]] = $connection;

        event(new DatabaseConfugurationCompletedEvent(['databasename' => $dbname]));
    }

    public function runInteliMigration(StoreInteliRequest $request)
    {
        $dbname = $request["databasename"];

        Config::set("database.connections." . $dbname, [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => $dbname,
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ]);


         Artisan::call( 'migrate', [
             '--database' => $dbname,
             //'--path' => 'database/migrations',
             //'--force' => true
         ]);

         event(new DatabaseMigrationCompletedEvent(['databasename' => $dbname]));
    }

    public function runInteliSeeder(StoreInteliRequest $request)
    {
        $dbname = $request["databasename"];

        Config::set("database.connections." . $dbname, [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => $dbname,
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ]);

         Artisan::call( 'db:seed', [
             '--database' => $dbname,
             #'--path' => 'database/migrations',
             #'--force' => true
         ]);

         event(new DatabaseSeedingCompletedEvent(['databasename' => $dbname]));
    }

}
