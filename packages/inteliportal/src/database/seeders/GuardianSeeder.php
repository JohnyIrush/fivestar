<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliportal\app\Models\Gender;
use Softwarescares\Inteliportal\app\Models\Guardian;

class GuardianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Guardian::truncate();
        $faker = \Faker\Factory::create();

        Guardian::create(
            [
             "user_id" => 4,
             "firstname" => $faker->firstname(),
             "lastname" => $faker->lastname(),
             "bio" => $faker->paragraph(),
             "student_id" => 1,
             "gender_id" => Gender::all()->random()->id,
             "address" => $faker->address(),

             "title" => $faker->title(),
             "type" => 'guardian'

        ]);

        Guardian::create(
            [
                "user_id" => 5,
                "firstname" => $faker->firstname(),
                "lastname" => $faker->lastname(),
                "bio" => $faker->paragraph(),
                "student_id" => 2,
                "gender_id" => Gender::all()->random()->id,
                "address" => $faker->address(),

                "title" => $faker->title(),
                "type" => 'guardian'
        ]);

        Guardian::create(
            [
                "user_id" => 6,
                "firstname" => $faker->firstname(),
                "lastname" => $faker->lastname(),
                "bio" => $faker->paragraph(),
                "student_id" => 3,
                "gender_id" => Gender::all()->random()->id,
                "address" => $faker->address(),

                "title" => $faker->title(),
                "type" => 'guardian'
        ]);

    }
}
