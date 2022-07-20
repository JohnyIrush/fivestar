<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Hostel;
use Softwarescares\Intelistaff\app\Models\Teacher;

class HostelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Hostel::truncate();
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 15; $i++)
        {
            Hostel::create(
                [
                  "hostel"  => $faker->colorName(),
                  "loction"  => $faker->countryCode(),
                  "teacher_id"  => Teacher::all()->random()->id
                ]);
        }

    }
}
