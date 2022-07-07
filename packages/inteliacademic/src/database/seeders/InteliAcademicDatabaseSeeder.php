<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;

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
            TeacherSeeder::class,
            DepartmentSeeder::class,
            SubjectSeeder::class,
            SectionSeeder::class,
            ]
        );
    }
}
