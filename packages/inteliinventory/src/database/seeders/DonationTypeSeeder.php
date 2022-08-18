<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\DonationType;

class DonationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DonationType::truncate();

      $faker = \Faker\Factory::create();

      DonationType::create([
          "image" => $faker->imageUrl(),
          "type" => "donor",
          "description" => $faker->paragraph(),
          "status" => $faker->boolean(),
      ]);

        DonationType::create([
          "image" => $faker->imageUrl(),
          "type" => "donee",
          "description" => $faker->paragraph(),
          "status" => $faker->boolean(),
      ]);
    }
}
