<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Customer;
use Softwarescares\Inteliinventory\app\Models\Invoice;
use Softwarescares\Inteliinventory\app\Models\PaymentType;
use Softwarescares\Inteliinventory\app\Models\Sale;
use Softwarescares\Inteliinventory\app\Models\Warehouse;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sale::truncate();

        $faker = \Faker\Factory::create();

        Sale::create([
            "invoice_id" => Invoice::all()->random()->id,
            "warehouse_id" => Warehouse::all()->random()->id,
            "date" => $faker->date(),
            "customer_id" => Customer::all()->random()->id,
            "total" => $faker->numberBetween(100,50000),
            "total paid" => $faker->numberBetween(100,50000),
            "payment_type_id" => PaymentType::all()->random()->id,
            "status" => $faker->boolean(),
        ]);
    }
}
