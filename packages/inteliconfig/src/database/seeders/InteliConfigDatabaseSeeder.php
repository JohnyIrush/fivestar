<?php

namespace Softwarescares\Inteliconfig\database\seeders;

use Illuminate\Database\Seeder;

class InteliConfigDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                ConfigSeeder::class
            ]
        );
    }
}
