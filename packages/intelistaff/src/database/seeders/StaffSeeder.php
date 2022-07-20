<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliportal\app\Models\Gender;
use Softwarescares\Intelistaff\app\Models\Category;
use Softwarescares\Intelistaff\app\Models\Staff;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Staff::truncate();
        $faker = \Faker\Factory::create();

        for ($i=7; $i <= 60; $i++)
        {
            $category = Category::all()->random()->id;

            Staff::create(
                [
                 "user_id" => $i,
                 "firstname" => $faker->firstname(),
                 "lastname" => $faker->lastname(),
                 "bio" => $faker->paragraph(),
                 "career" => $faker->jobTitle(),
                 "gender_id" => Gender::all()->random()->id,
                 "address" => $faker->address(),

                 "title" => $faker->title(),
                 "type" => 'staff',
                 "category_id" => $category,
                 "occupation_id" => ($category == 1) ? $faker->numberBetween(1,7): $faker->numberBetween(8,14)
            ]);
        }

    }
}
