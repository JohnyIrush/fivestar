<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelistaff\database\seeders\StaffSeeder;

class InteliAcademicDatabaseSeeder extends Seeder
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
            LevelSeeder::class,
            StreamSeeder::class,
            SubjectSeeder::class,
            StaffSeeder::class,
            SectionSeeder::class,
            LevelStreamSeeder::class,
            # StudentSubjectSeeder::class,
            ClubSeeder::class,
            SportSeeder::class,
            #SportStudentSeeder::class,
            #ClubStudentSeeder::class,
            ]
        );
    }
}
