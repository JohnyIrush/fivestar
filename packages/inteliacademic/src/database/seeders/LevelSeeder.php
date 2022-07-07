<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Softwarescares\Inteliacademic\app\Models\Level;
use Illuminate\Database\Seeder;

class LevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Level::truncate();

        Level::create([
            'level' => 'Form One',

        ]);

        Level::create([
            'level' => 'Form Two',

        ]);

        Level::create([
            'level' => 'Form Three',

        ]);

        Level::create([
            'level' => 'Form Four',
        ]);

    }
}
