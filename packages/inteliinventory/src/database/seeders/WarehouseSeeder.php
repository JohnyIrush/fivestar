<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Warehouse;

class WarehouseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Warehouse::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i < 10; $i++)
        {
            Warehouse::create([
                "name" => $faker->citySuffix(),
                "phone" => $faker->phoneNumber(),
                "email" => $faker->phoneNumber(),
                "company" => $faker->company(),
                "address" => $faker->address(),
                "priority" => $faker->numberBetween(1,10),
                "status" => $faker->boolean(),
            ]);
        }

    }
}
