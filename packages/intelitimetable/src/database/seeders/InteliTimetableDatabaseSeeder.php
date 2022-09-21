<?php

namespace Softwarescares\Intelitimetable\database\seeders;

use Illuminate\Database\Seeder;

class InteliTimetableDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
             VenueSeeder::class,
             DaySeeder::class,
             DaySessionSeeder::class,
             TimetableSeeder::class,
             TermSeeder::class
            ]
        );
    }
}
