<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinstaller\app\Models\SchoolEducationSystem;

class SchoolEducationSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolEducationSystem::truncate();

        SchoolEducationSystem::create(
            ['system' => '8-4-4']
        );

        SchoolEducationSystem::create(
            ['system' => '7-6-2']
        );
    }
}
