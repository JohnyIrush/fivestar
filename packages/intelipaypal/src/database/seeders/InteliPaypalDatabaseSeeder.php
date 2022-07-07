<?php

namespace Softwarescares\Intelipaypal\database\seeders;

use Illuminate\Database\Seeder;

class InteliPaypalDatabaseSeeder extends Seeder
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
                PaypalSeeder::class
            ]
        );
    }
}
