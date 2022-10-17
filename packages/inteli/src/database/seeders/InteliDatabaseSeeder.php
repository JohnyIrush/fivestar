<?php

namespace Softwarescares\Inteli\database\seeders;

use Illuminate\Database\Seeder;

class InteliDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(
            [
                InteliSeeder::class,
            ]
        );

    }
}
