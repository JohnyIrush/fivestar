<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\Donation;
use Softwarescares\Inteliinventory\app\Models\DonationType;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Donation::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i <= 50; $i++)
        {
            Donation::create([
                "avatar" => $faker->imageUrl(),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber(),
                "status" => $faker->boolean(),
                "donation_type_id" => DonationType::all()->random()->id,
                "description" => $faker->paragraph(),
                "address" => $faker->address()
            ]);
        }
    }
}
