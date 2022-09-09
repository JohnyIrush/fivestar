<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliacademic\app\Models\Attendance;
use Softwarescares\Inteliportal\app\Models\Student;

class AttendanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Attendance::truncate();

        $faker = \Faker\Factory::create();

        foreach (Student::all() as $key => $student)
        {
          Attendance::create([
              'student_id' => $student->id,
              'status' => $faker->boolean(),
          ]);

        }
    }
}
