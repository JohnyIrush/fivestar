<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliportal\database\seeders\GenderSeeder;

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
                GenderSeeder::class,
                CategorySeeder::class,
                StaffSeeder::class,
                OccupationSeeder::class,
                DepartmentSeeder::class,
                TeacherSeeder::class,
            ]
        );

    }
}
