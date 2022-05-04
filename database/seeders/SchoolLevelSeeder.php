<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinstaller\app\Models\SchoolLevel;

class SchoolLevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        SchoolLevel::truncate();

        SchoolLevel::create(
            ['level' => 'Primary School']
        );

        SchoolLevel::create(
            ['level' => 'High School']
        );

        SchoolLevel::create(
            ['level' => 'University']
        );

        SchoolLevel::create(
            ['level' => 'College']
        );

    }
}
