<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Illuminate\Facades\DB;
use Softwarescares\Inteliportal\app\Models\SchoolTypes;

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
            ['type' => 'Private']
        );

        SchoolTypes::create(
            ['type' => 'Public']
        );
    }
}
