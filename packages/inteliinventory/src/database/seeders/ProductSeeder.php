<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Product;
use Softwarescares\Inteliinventory\app\Models\ProductCategory;
use Softwarescares\Inteliinventory\app\Models\ProductType;
use Softwarescares\Inteliinventory\app\Models\Supplier;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 30; $i++)
        {
            Product::create([
                "thumbnail" => $faker->imageUrl(),
                "name" => $faker->realText(15),
                "SKU" => $faker->numberBetween(1000,10000),
                "supplier_id" => Supplier::all()->random()->id,
                "product_category_id" => ProductCategory::all()->random()->id,
                "product_type_id" => productType::all()->random()->id,
                "price" => $faker->numberBetween(1000, 100000),
                "quantity" => $faker->numberBetween(10,1000),
                "variant" => $faker->boolean(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
