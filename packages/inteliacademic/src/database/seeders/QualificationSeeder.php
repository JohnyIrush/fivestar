<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Qualification;
use Softwarescares\Inteliportal\app\Models\SchoolLevel;

class QualificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Qualification::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i <= 3; $i++)
        {
            Qualification::create([
                'student_id' => 1,
                'title' => $faker->jobTitle(),
                'school_level_id' => $faker->numberBetween(1,3),
                'meangrade' => 'A',
                'meanscore' => 400,
                'points' => 400,
                'school_name' => $faker->name(),
                'start_year' => $faker->date(),
                'end_year' => $faker->date(),
                'duration' => $faker->numberBetween(1, 9)
            ]);
        }
    }
}
