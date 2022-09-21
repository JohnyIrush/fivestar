<?php

namespace Softwarescares\Intelitimetable\database\seeders;

use Softwarescares\Intelitimetable\app\Models\Day;
use Illuminate\Database\Seeder;

class DaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Day::truncate();

        $faker = \Faker\Factory::create();

        Day::create([
            'day' => 'Sunday',
            'start' => '07:30:00',
            'end' => '04:00:00',
            "status" => $faker->boolean()
        ]);

        Day::create([
            'day' => 'Monday',
            'start' => '07:30:00',
            'end' => '04:00:00',
            "status" => $faker->boolean()
        ]);

        Day::create([
            'day' => 'Tuesday',
            'start' => '7:30:00',
            'end' => '4:00:00',
            "status" => $faker->boolean()
        ]);

        Day::create([
            'day' => 'Wednesday',
            'start' => '07:30:00',
            'end' => '04:00:00',
            "status" => $faker->boolean()
        ]);

        Day::create([
            'day' => 'Thursday',
            'start' => '07:30:00',
            'end' => '04:00:00',
            "status" => $faker->boolean()
        ]);

        Day::create([
            'day' => 'Friday',
            'start' => '07:30:00',
            'end' => '04:00:00',
            "status" => $faker->boolean()
        ]);


        Day::create([
            'day' => 'Saturday',
            'start' => '07:30:00',
            'end' => '04:00:00',
            "status" => $faker->boolean()
        ]);
    }
}
