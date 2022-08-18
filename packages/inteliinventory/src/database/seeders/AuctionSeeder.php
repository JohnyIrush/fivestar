<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\Customer;
use Softwarescares\Inteliinventory\app\Models\Product;
use Softwarescares\Inteliinventory\app\Models\Auction;

class AuctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auction::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Auction::create([
            "product_id" => Product::all()->random()->id,
            "customer_id" => Customer::all()->random()->id,
            "price" => $faker->numberBetween(100,10000),
            "status" => $faker->boolean(),
            ]);
        }
    }
}
