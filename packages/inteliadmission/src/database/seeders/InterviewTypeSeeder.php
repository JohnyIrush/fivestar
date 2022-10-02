<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliadmission\app\Models\InterviewType;

class InterviewTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        InterviewType::truncate();

        $faker = \Faker\Factory::create();

        InterviewType::create([
            "type" => "Staff",
            "description" => $faker->paragraph(),
            "status" => $faker->boolean(),
            "google_form_template_id" => 1
        ]);

        InterviewType::create([
            "type" => "Student",
            "description" => $faker->paragraph(),
            "status" => $faker->boolean(),
            "google_form_template_id" => 2
        ]);

    }
}
