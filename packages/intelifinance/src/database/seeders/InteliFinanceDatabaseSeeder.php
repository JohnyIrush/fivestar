<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;

class InteliFinanceDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                InteliPaymentSeeder::class,
                PaymentMethodSeeder::class,
                ServiceSeeder::class,
                AccountSeeder::class,
                DepositSeeder::class,
                PaymentSeeder::class,
                WithdrawSeeder::class,
                FeeSeeder::class
            ]
        );
    }
}
