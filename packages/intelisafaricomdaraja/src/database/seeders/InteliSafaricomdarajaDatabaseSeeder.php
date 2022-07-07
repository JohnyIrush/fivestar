<?php

namespace Softwarescares\Intelisafaricomdaraja\database\seeders;

use Illuminate\Database\Seeder;

class InteliSafaricomdarajaDatabaseSeeder extends Seeder
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
                BusinessToCustomerTableSeeder::class,
                CustomerToBusinessTableSeeder::class,
                MpesaExpressTableSeeder::class
            ]
        );
    }
}
