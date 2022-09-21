<?php

namespace Softwarescares\Inteliexam\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelitimetable\app\Models\Term;
use Softwarescares\Inteliacademic\app\Models\Level;

use Softwarescares\Inteliexam\app\Models\Exam;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Exam::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 10; $i++)
        {
            Exam::create([
            "cover" => $faker->imageUrl(),
            "exam" => $faker->domainWord(),
            "level_id" => Level::all()->random()->id, 
            "term_id" => Term::all()->random()->id,
            "start_date" => $faker->date(),
            "end_date" => $faker->date(),  
            ]);
        }
    }
}
