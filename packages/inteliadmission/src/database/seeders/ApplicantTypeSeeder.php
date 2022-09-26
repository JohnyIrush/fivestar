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
            "status" => $faker->boolean()
        ]);

        ApplicantType::create([
            "type" => "Student",
            "description" => $faker->paragraph(),
            "status" => $faker->boolean()
        ]);

        /*
        for ($i=0; $i < 20; $i++)
        {
            ApplicantType::create([
                "type" => $faker->jobTitle(),
                "description" => $faker->paragraph(),
                "status" => $faker->boolean()
            ]);
        }
        */
    }
}
