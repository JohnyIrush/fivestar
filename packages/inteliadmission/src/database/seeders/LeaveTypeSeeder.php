<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliadmission\app\Models\LeaveType;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LeaveType::truncate();

        $faker = \Faker\Factory::create();

        LeaveType::create([
            "type" => "Staff",
            "description" => $faker->paragraph(),
            "status" => $faker->boolean(),
            "google_form_template_id" => 1
        ]);

        LeaveType::create([
            "type" => "Student",
            "description" => $faker->paragraph(),
            "status" => $faker->boolean(),
            "google_form_template_id" => 2
        ]);
    }
}
