<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Illuminate\Database\Seeder;

class InteliStaffDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call
        (
            [
                StaffSeeder::class,
                DepartmentSeeder::class
            ]
        );

    }
}
