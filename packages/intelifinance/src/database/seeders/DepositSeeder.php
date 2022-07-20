<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelifinance\app\Models\Account;
use Softwarescares\Intelifinance\app\Models\Deposit;
use Softwarescares\Intelifinance\app\Models\PaymentMethod;

class DepositSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Deposit::truncate();

        $faker = \Faker\Factory::create();


        for ($i=0; $i < 60; $i++)
        {
            Deposit::create([
                "payment_method_id" => PaymentMethod::all()->random()->id,
                "account_id" => Account::all()->random()->id,
                "amount" => $faker->numberBetween(6000, 30000),
            ]);
        }
    }
}
