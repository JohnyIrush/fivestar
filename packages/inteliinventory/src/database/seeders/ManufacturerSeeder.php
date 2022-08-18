<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Manufacturer;

class ManufacturerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Manufacturer::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Manufacturer::create([
                "image" => $faker->imageUrl(),
                "manufacturer" => $faker->company(),
                "description" => $faker->paragraph(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
