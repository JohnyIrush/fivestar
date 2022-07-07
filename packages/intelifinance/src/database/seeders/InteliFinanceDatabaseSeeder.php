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
            ]
        );
    }
}
