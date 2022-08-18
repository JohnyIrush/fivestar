<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Purchase;
use Softwarescares\Inteliinventory\app\Models\Supplier;
use Softwarescares\Inteliinventory\app\Models\Warehouse;

class PurchaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Purchase::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Purchase::create([
                "purchase_number" => $faker->numberBetween(1,10000000),
                "supplier_id" => Supplier::all()->random()->id,
                "warehouse_id" => Warehouse::all()->random()->id,
                "price" => $faker->numberBetween(50,10000),
                "date" => $faker->date(),
                "status" => $faker->boolean(),
                "quantity" => $faker->numberBetween(1,50),
                "total" => $faker->numberBetween(50,1000000),
                "received" => $faker->boolean(),
                "missing" => $faker->boolean(),
            ]);
        }
    }
}
