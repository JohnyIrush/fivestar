<?php

namespace Database\Seeders;

use Softwarescares\Inteliinstaller\app\Models\SchoolTypes;
use Illuminate\Database\Seeder;

class SchoolTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolTypes::truncate();

        SchoolTypes::create(
            ['type' => 'Primary School']
        );

        SchoolTypes::create(
            ['type' => 'High School']
        );

        SchoolTypes::create(
            ['type' => 'University']
        );

        SchoolTypes::create(
            ['type' => 'College']
        );
    }
}
