<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Room;
use Softwarescares\Inteliinventory\app\Models\Hostel;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Room::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 30; $i++)
        {
            Room::create([
                'hostel_id' => Hostel::all()->random()->id,
                'room' => $faker->name(),
                'room_number' => $faker->numberBetween(100, 10000),
            ]);
        }
    }
}
