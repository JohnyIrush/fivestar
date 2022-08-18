<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\Goverment;

class GovermentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Goverment::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i <= 50; $i++)
        {
            Goverment::create([
                "avatar" => $faker->imageUrl(),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber(),
                "status" => $faker->boolean(),
                "goverment" => $faker->company(),
                "description" => $faker->paragraph(),
                "address" => $faker->address(),
            ]);
        }
    }
}
