<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Softwarescares\Inteliacademic\app\Models\Level;

use Softwarescares\Inteliacademic\app\Models\SubjectTeacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Intelistaff\app\Models\Department;
use Softwarescares\Intelistaff\app\Models\Teacher;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('department_subject')->truncate();
        Subject::truncate();

        $faker = \Faker\Factory::create();

        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Mathematics',
            'duration' => 40,
            'lessons' => 0,
            'status' => true
        ]);


        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Chemistry',
            'duration' => 40,
            'lessons' => 0,
            'status' => true
        ]);

        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Physics',
            'duration' => 40,
            'lessons' => 0,
            'status' => true

        ]);

        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Computer Studies',
            'duration' => 40,
            'lessons' => 0,
            'status' => true

        ]);

        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Biology',
            'duration' => 40,
            'lessons' => 0,
            'status' => true
        ]);

        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Geography',
            'duration' => 40,
            'lessons' => 0,
            'status' => true

        ]);

        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Psychology',
            'duration' => 40,
            'lessons' => 0,
            'status' => true

        ]);

        Subject::create([
            'avatar' => $faker->imageUrl(),
            'subject' => 'Music',
            'duration' => 40,
            'lessons' => 0,
            'status' => true

        ]);


        for($j = 1; $j <= sizeof(Subject::all()); $j++)
        {
            Subject::find($j)->department()->attach(Department::all()->random());
        }

        for($j = 1; $j <= sizeof(Subject::all()); $j++)
        {
            Subject::find($j)->levels()->attach(Level::all());
        }

    }
}
