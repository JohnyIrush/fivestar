<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Weight;

class WeightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Weight::truncate();

        $faker = \Faker\Factory::create();

            Weight::create([
                "weight" => "milligram"
            ]);

            Weight::create([
                "weight" => "centigram"
            ]);

            Weight::create([
                "weight" => "decigram"
            ]);

            Weight::create([
                "weight" => "gram"
            ]);

            Weight::create([
                "weight" => "kilogram"
            ]);

            Weight::create([
                "weight" => "ounces"
            ]);

            Weight::create([
                "weight" => "pounds"
            ]);

            Weight::create([
                "weight" => "ton"
            ]);
    }
}
