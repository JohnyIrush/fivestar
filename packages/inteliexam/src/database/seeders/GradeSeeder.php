<?php

namespace Softwarescares\Inteliexam\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliexam\app\Models\Grade;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grade::truncate();

        $faker = \Faker\Factory::create();
            Grade::create([
            "grade" => "A", 
            "min_marks" => 81,
            "max_marks" => 84,
            "points" => 12,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "A-", 
            "min_marks" => 74,
            "max_marks" => 80,
            "points" => 11,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "B+", 
            "min_marks" => 67,
            "max_marks" => 73,
            "points" => 10,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "B", 
            "min_marks" => 60,
            "max_marks" => 66,
            "points" => 9,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "B-", 
            "min_marks" => 53,
            "max_marks" => 59,
            "points" => 8,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "C+", 
            "min_marks" => 46,
            "max_marks" => 52,
            "points" => 7,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "C", 
            "min_marks" => 39,
            "max_marks" => 45,
            "points" => 6,
            "status" => true,  
            ]);


            Grade::create([
            "grade" => "C-", 
            "min_marks" => 32,
            "max_marks" => 38,
            "points" => 5,
            "status" => true,  
            ]);


            Grade::create([
            "grade" => "D+", 
            "min_marks" => 25,
            "max_marks" => 31,
            "points" => 3,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "D", 
            "min_marks" => 18,
            "max_marks" => 24,
            "points" => 3,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "D-", 
            "min_marks" => 17,
            "max_marks" => 11,
            "points" => 2,
            "status" => true,  
            ]);

            Grade::create([
            "grade" => "E", 
            "min_marks" => 7,
            "max_marks" => 10,
            "points" => 1,
            "status" => true,  
            ]);
    }
}
