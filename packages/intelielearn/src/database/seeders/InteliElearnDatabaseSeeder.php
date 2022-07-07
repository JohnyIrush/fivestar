<?php

namespace Softwarescares\Intelielearn\database\seeders;

use Illuminate\Database\Seeder;

class InteliElearnDatabaseSeeder extends Seeder
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
                ElearnSeeder::class
            ]
        );
    }
}
