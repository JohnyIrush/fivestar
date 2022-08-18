<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\Consumption;
use Softwarescares\Inteliinventory\app\Models\Inventory;
use Softwarescares\Intelistaff\app\Models\Department;
use Softwarescares\Inteliinventory\app\Models\Rate;

class ConsumptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Consumption::truncate();

      $faker = \Faker\Factory::create();
      for ($i=1; $i <= 500; $i++)
      { 
         Consumption::create([
               "inventory_id" => Inventory::all()->random()->id,
               "department_id" => Department::all()->random()->id,
               "end_date" => $faker->date(),
               "rate_id" => Rate::all()->random()->id,
               "duration" => $faker->numberBetween(1,1000),
               "status" => $faker->boolean(),
         ]);
      }

    }
}
