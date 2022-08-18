<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Customer::create([
                "avatar" => $faker->imageUrl(),
                "firstname" => $faker->firstName(),
                "lastname" => $faker->lastName(),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
