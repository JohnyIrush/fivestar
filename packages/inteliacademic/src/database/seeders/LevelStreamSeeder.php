<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\LevelStream;
use Softwarescares\Inteliacademic\app\Models\Stream;

class LevelStreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1;$i <= sizeof(Level::all());)
        {
            for($j = 1;$j <=  sizeof(Stream::all());$j++)
            {
                LevelStream::create([
                    "level_id" => $i,
                    "stream_id" => $j
                ]);
                $i++;
            }
        }
    }
}
