<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;

class InteliPortalDatabaseSeeder extends Seeder
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
                PortalSeeder::class
            ]
        );
    }
}
