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
            "occupation" => "Teacher",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "Teacher's Assistant",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


        Occupation::create([
            "occupation" => "Principal",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "Deputy Principal",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "Deputy Academics",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


        Occupation::create([
            "occupation" => "Guidance Counselor",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "School Social Worker",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "School Nurse",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "Librarian",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "Maintenanc,e",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


        Occupation::create([
            "occupation" => "Custodial",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "Food Service",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);

        Occupation::create([
            "occupation" => "Transportation",
            "salary" => $faker->numberBetween(30000, 90000)
        ]);


    }
}
