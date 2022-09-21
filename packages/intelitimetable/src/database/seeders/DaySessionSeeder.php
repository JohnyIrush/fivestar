<?php

namespace Softwarescares\Intelitimetable\database\seeders;

use Softwarescares\Intelitimetable\app\Models\Day;
use Softwarescares\Intelitimetable\app\Models\DaySession;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaySessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DaySession::truncate();
        DB::table('day_day_session')->truncate();

        $faker = \Faker\Factory::create();

        DaySession::create([
            'session' => 'Morning',
            'type' => 'lesson',
            'start' => '07:50:00',
            'end' => '09:50:00',
            'status' => $faker->boolean()
        ]);

        DaySession::create([
            'session' => 'Short Break',
            'type' => 'break',
            'start' => '09:50:00',
            'end' => '10:00:00',
            'status' => $faker->boolean()
        ]);

        DaySession::create([
            'session' => 'Mid-Morning',
            'type' => 'lesson',
            'start' => '10:00:00',
            'end' => '11:20:00',
            'status' => $faker->boolean()
        ]);

        DaySession::create([
            'session' => 'Long Break',
            'type' => 'break',
            'start' => '11:20:00',
            'end' => '11:40:00',
            'status' => $faker->boolean()
        ]);

        DaySession::create([
            'session' => 'Before Lunch',
            'type' => 'lesson',
            'start' => '11:40:00',
            'end' => '13:00:00',
            'status' => $faker->boolean()
        ]);

        DaySession::create([
            'session' => 'Lunch',
            'type' => 'break',
            'start' => '13:00:00',
            'end' => '14:00:00',
            'status' => $faker->boolean()
        ]);

        DaySession::create([
            'session' => 'Afternoon',
            'type' => 'lesson',
            'start' => '14:00:00',
            'end' => '16:00:00',
            'status' => $faker->boolean()
        ]);

        DaySession::create([
            'session' => 'Games',
            'type' => 'break',
            'start' => '16:00:00',
            'end' => '17:00:00',
            'status' => $faker->boolean()
        ]);


        foreach (DaySession::all() as $session)
        {
            $session->day()->attach(Day::all());
        }
    }
}
