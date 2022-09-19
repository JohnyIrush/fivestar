<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelistaff\app\Models\Occupation;

class OccupationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Occupation::truncate();

        $faker = \Faker\Factory::create();

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Teacher",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Teacher's Assistant",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Principal",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Deputy Principal",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Deputy Academics",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Guidance Counselor",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "School Social Worker",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "School Nurse",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Librarian",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Maintenanc,e",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Custodial",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Food Service",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "icon" => $faker->imageUrl(),
            "occupation" => "Transportation",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


    }
}
