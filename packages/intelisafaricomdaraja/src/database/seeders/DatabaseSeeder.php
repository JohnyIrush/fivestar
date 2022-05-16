<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelisafaricomdaraja\app\Models\BusinessToCustomerTransaction;
use Softwarescares\Intelisafaricomdaraja\app\Models\CustomerToBusinessTransaction;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MpesaExpressTableSeeder::class,
            CustomerToBusinessTableSeeder::class,
            BusinessToCustomerTableSeeder::class
        ]);
    }
}
