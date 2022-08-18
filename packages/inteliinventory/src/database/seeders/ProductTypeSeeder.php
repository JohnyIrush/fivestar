<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\ProductType;

class ProductTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductType::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            ProductType::create([
                "image" => $faker->imageUrl(),
                "type" => $faker->realText(10),
                "description" => $faker->paragraph(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
