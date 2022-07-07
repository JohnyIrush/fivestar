<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Softwarescares\Inteliacademic\app\Models\LevelStream;
use Illuminate\Database\Seeder;
use Softwarescares\Intelitimetable\app\Models\Venue;

class LevelStreamVenue extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= sizeof(LevelStream::all());)
        {
            for($j = 1;$j <=  sizeof(Venue::all());$j++)
            {
                LevelStream::find($i)->venue()->attach($j);
                $i++;
            }
        }
    }
}
