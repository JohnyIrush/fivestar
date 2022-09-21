<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelifinance\app\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();

        $faker = \Faker\Factory::create();

        Service::create([
            "icon" => $faker->imageUrl(),
            "service" => "Fees/Tution",
            "price" => $faker->numberBetween(3000,60000),
            "description" => $faker->text(),
            "status" => $faker->boolean(),
        ]);

        Service::create([
            "icon" => $faker->imageUrl(),
            "service" => "Books",
            "price" => $faker->numberBetween(3000,60000),
            "description" => $faker->text(),
            "status" => $faker->boolean(),
        ]);

        Service::create([
            "icon" => $faker->imageUrl(),
            "service" => "Remedial",
            "price" => $faker->numberBetween(3000,60000),
            "description" => $faker->text(),
            "status" => $faker->boolean(),
        ]);

        Service::create([
            "icon" => $faker->imageUrl(),
            "service" => "Exam",
            "price" => $faker->numberBetween(3000,60000),
            "description" => $faker->text(),
            "status" => $faker->boolean(),
        ]);

        Service::create([
            "icon" => $faker->imageUrl(),
            "service" => "Tours/Trips",
            "price" => $faker->numberBetween(3000,60000),
            "description" => $faker->text(),
            "status" => $faker->boolean(),
        ]);
    }
}
