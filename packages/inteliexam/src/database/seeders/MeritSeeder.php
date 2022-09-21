<?php

namespace Softwarescares\Inteliexam\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliexam\app\Models\Exam;

use Softwarescares\Inteliexam\app\Models\Merit;

use Softwarescares\Inteliportal\app\Models\Student;

use Softwarescares\Inteliacademic\app\Models\Subject;

class MeritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Merit::truncate();

        $faker = \Faker\Factory::create();

        foreach (Student::where("level_id", "1")->get() as $student)
        {
            foreach (Subject::all() as $subject)
            {
              Merit::create([
              "student_id" => $student["id"], 
              "subject_id" => $subject["id"],
              "exam_id" => Exam::where("level_id", "1")->get()[0]->id,
              "marks" => $faker->numberBetween(0,100),  
              ]);
            }
        }
    }
}
