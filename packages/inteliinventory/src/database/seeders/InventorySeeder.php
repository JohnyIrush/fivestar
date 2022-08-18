<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\Inventory;
use Softwarescares\Inteliinventory\app\Models\Warehouse;
use Softwarescares\Inteliinventory\app\Models\Product;

class InventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i <= 30; $i++)
        {
            Inventory::create([
                "warehouse_id" => Warehouse::all()->random()->id,
                "product_id" => $i,
                "description" => $faker->paragraph(),
                "location" => $faker->city()
            ]);
        }
    }
}
