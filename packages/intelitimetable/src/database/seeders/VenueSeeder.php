<?php

namespace Softwarescares\Intelitimetable\database\seeders;

use Softwarescares\Intelitimetable\app\Models\Level;
use Softwarescares\Intelitimetable\app\Models\Venue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;

class VenueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Venue::truncate();

        // purple streams
        Venue::create([
            'venue' => 'Form One Room purple',
            'location' => (string)rand(500000,10000000),
            'section_id' => 1,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Form Two Room purple',
            'location' => (string)rand(500000,10000000),
            'section_id' => 2,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Form Three Room purple',
            'location' => (string)rand(500000,10000000),
            'section_id' => 3,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Form Four Room purple',
            'location' => (string)rand(500000,10000000),
            'section_id' => 4,
            'status' => true
        ]);


        // pink streams
        Venue::create([
            'venue' => 'Form One Room pink',
            'location' => (string)rand(500000,10000000),
            'section_id' => 5,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Form Two Room pink',
            'location' => (string)rand(500000,10000000),
            'section_id' => 6,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Form Three Room pink',
            'location' => (string)rand(500000,10000000),
            'section_id' => 7,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Form Four Room pink',
            'location' => (string)rand(500000,10000000),
            'section_id' => 8,
            'status' => true
        ]);

        //Laboratories

        Venue::create([
            'venue' => 'Chemistry Lab',
            'location' => (string)rand(500000,10000000),
            'subject_id' => 2,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Physics Lab',
            'location' => (string)rand(500000,10000000),
            'subject_id' => 3,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Biology Lab',
            'location' => (string)rand(500000,10000000),
            'subject_id' => 5,
            'status' => true
        ]);


        Venue::create([
            'venue' => 'Computer Lab',
            'location' => (string)rand(500000,10000000),
            'subject_id' => 4,
            'status' => true
        ]);

        Venue::create([
            'venue' => 'Music Lab',
            'location' => (string)rand(500000,10000000),
            'subject_id' => 8,
            'status' => true
        ]);


        // Hall

                Venue::create([
            'venue' => 'Multi-Purpose Hall',
            'location' => (string)rand(500000,10000000),
            'subject_id' => 7,
            'status' => true
        ]);

        /*
        foreach(Level::all() as $level)
        {
            $level->venues()->attach(Venue::inRandomOrder()->take(rand(1,4))->pluck('id'));
        } */
    }
}
