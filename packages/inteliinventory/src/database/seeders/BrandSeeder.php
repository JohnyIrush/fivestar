<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::truncate();

        $faker = \Faker\Factory::create();
        for ($i=0; $i < 20; $i++)
        {
            Brand::create([
                "image" => $faker->imageUrl(),
                "brand" => $faker->company(),
                "description" => $faker->paragraph(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
