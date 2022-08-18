<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Supplier;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Supplier::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i <= 50; $i++)
        {
            Supplier::create([
                "avatar" => $faker->imageUrl(),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber(),
                "status" => $faker->boolean(),
                "supplier" => $faker->company(),
                "description" => $faker->paragraph(),
                "address" => $faker->address(),
            ]);
        }
    }
}
