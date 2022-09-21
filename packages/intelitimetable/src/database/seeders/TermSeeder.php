<?php

namespace Softwarescares\Intelitimetable\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelitimetable\app\Models\Term;

class TermSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Term::truncate();

        $faker = \Faker\Factory::create();

        Term::create([
        "term" => "Term 1",
        "start_date" => $faker->date(),
        "end_date" => $faker->date(),
        "status" => $faker->boolean() 
        ]);

        Term::create([
        "term" => "Term 2",
        "start_date" => $faker->date(),
        "end_date" => $faker->date(),
        "status" => $faker->boolean() 
        ]);

        Term::create([
        "term" => "Term 3",
        "start_date" => $faker->date(),
        "end_date" => $faker->date(),
        "status" => $faker->boolean() 
        ]);

        Term::create([
        "term" => "Mid Term",
        "start_date" => $faker->date(),
        "end_date" => $faker->date(),
        "status" => $faker->boolean() 
        ]);
    }
}
