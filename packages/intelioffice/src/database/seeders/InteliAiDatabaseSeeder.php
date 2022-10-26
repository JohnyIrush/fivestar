<?php

namespace Softwarescares\Inteliai\database\seeders;

use Illuminate\Database\Seeder;

class InteliAiDatabaseSeeder extends Seeder
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
                AISeeder::class
            ]
        );
    }
}
