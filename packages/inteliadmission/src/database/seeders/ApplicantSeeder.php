<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliadmission\app\Models\Applicant;
use Softwarescares\Inteliadmission\app\Models\ApplicantType;

class ApplicantSeeder extends Seeder
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
            "applicant_type_id" => 1,
            "user_id" => User::all()->random()->id,
            "status" => $faker->boolean()
        ]);
    }
}
