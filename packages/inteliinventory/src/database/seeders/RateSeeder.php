<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\Rate;

class RateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Rate::truncate();

      $faker = \Faker\Factory::create();

         Rate::create([
               "rate" => "every second",
         ]);

         Rate::create([
               "rate" => "every minute",
         ]);

         Rate::create([
               "rate" => "hourly",
         ]);


         Rate::create([
               "rate" => "daily",
         ]);

         Rate::create([
               "rate" => "weekly",
         ]);


         Rate::create([
               "rate" => "monthly",
         ]);


         Rate::create([
               "rate" => "annually",
         ]);
    }
}
