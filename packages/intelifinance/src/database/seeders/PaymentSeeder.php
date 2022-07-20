<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelifinance\app\Models\Account;
use Softwarescares\Intelifinance\app\Models\Payment;
use Softwarescares\Intelifinance\app\Models\PaymentMethod;
use Softwarescares\Intelifinance\app\Models\Service;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Payment::truncate();

        $faker = \Faker\Factory::create();


        for ($i=0; $i < 60; $i++)
        {
            Payment::create([
                "service_id" => Service::all()->random()->id,
                "payment_method_id" => PaymentMethod::all()->random()->id,
                "account_id" => Account::all()->random()->id,
                "amount" => $faker->numberBetween(6000, 30000),
            ]);
        }
    }
}
