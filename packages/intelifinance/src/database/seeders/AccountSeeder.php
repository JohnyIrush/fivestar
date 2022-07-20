<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelifinance\app\Models\Account;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i <= 10; $i++)
        {
            Account::create([
                "user_id" => $i,
                "balance" => $faker->numberBetween(10000, 100000),
            ]);
        }

    }
}
