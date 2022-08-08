<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\database\seeders\ClubStudentSeeder;
use Softwarescares\Inteliacademic\database\seeders\SportStudentSeeder;
use Softwarescares\Inteliacademic\database\seeders\StudentSubjectSeeder;

use Softwarescares\Intelistaff\database\seeders\StaffSeeder;

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
                //GenderSeeder::class,
                CitySeeder::class,
                TownSeeder::class,
                SchoolTypesSeeder::class,
                SchoolEducationSystemSeeder::class,
                SchoolGenderSeeder::class,
                SchoolLevelSeeder::class,
                SchoolSeeder::class,
                PortalSeeder::class,
                StudentSeeder::class,
                GuardianSeeder::class,
                StudentSubjectSeeder::class,
                SportStudentSeeder::class,
                ClubStudentSeeder::class,
                SchoolSportSeeder::class,
                ClubSchoolSeeder::class,
                SchoolSubjectSeeder::class,
            ]
        );
    }
}
