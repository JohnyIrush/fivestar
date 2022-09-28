<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliadmission\app\Models\ApplicantType;

class ApplicantTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ApplicantType::truncate();

        $faker = \Faker\Factory::create();

        ApplicantType::create([
            "type" => "Staff",
            "description" => $faker->paragraph(),
            "status" => $faker->boolean(),
            "google_form_template_id" => 1
        ]);

        ApplicantType::create([
            "type" => "Student",
            "description" => $faker->paragraph(),
            "status" => $faker->boolean(),
            "google_form_template_id" => 2
        ]);
    }
}
