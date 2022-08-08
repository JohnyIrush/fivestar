<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliportal\app\Models\City;
use Softwarescares\Inteliportal\app\Models\Gender;
use Softwarescares\Inteliportal\app\Models\Guardian;
use Softwarescares\Inteliportal\app\Models\Town;

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
             "gender_id" => Gender::all()->random()->id,

             "address" => $faker->address(),
             "city_id" => City::all()->random()->id,
             "town_id" => Town::all()->random()->id,

             "title" => $faker->title(),
             "type" => 'guardian'

        ]);

        Guardian::create(
            [
                "user_id" => 5,
                "firstname" => $faker->firstname(),
                "lastname" => $faker->lastname(),
                "bio" => $faker->paragraph(),
                "gender_id" => Gender::all()->random()->id,

                "address" => $faker->address(),
                "city_id" => City::all()->random()->id,
                "town_id" => Town::all()->random()->id,

                "title" => $faker->title(),
                "type" => 'guardian'
        ]);

        Guardian::create(
            [
                "user_id" => 6,
                "firstname" => $faker->firstname(),
                "lastname" => $faker->lastname(),
                "bio" => $faker->paragraph(),
                "gender_id" => Gender::all()->random()->id,

                "address" => $faker->address(),
                "city_id" => City::all()->random()->id,
                "town_id" => Town::all()->random()->id,

                "title" => $faker->title(),
                "type" => 'guardian'
        ]);

    }
}
