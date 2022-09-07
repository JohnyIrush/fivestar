<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Intelistaff\app\Models\Teacher;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Section::truncate();

        //Level 1
        Section::create([
            'level_id' =>  1,
            'stream_id' => 1,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true
        ]);

        Section::create([
            'level_id' => 1,
            'stream_id' => 2,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true
        ]);

        //Level 2
        Section::create([
            'level_id' => 2,
            'stream_id' => 1,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true
        ]);

        Section::create([
            'level_id' => 2,
            'stream_id' => 2,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true

        ]);

        //Level 3
        Section::create([
            'level_id' => 3,
            'stream_id' => 1,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true
        ]);

        Section::create([
            'level_id' => 3,
            'stream_id' => 2,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true
        ]);

        //Level 4
        Section::create([
            'level_id' => 4,
            'stream_id' => 1,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true
        ]);

        Section::create([
            'level_id' => 4,
            'stream_id' => 2,
            'teacher_id' => Teacher::all()->random()->id,
            'status' =>  true
        ]);

    }
}
