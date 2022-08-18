<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\ProductCategory;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        ProductCategory::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            ProductCategory::create([
                "image" => $faker->imageUrl(),
                "category" => $faker->realText(10),
                "description" => $faker->paragraph(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
