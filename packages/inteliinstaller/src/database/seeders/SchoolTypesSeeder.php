<?php

namespace Softwarescares\Inteliinstaller\database\seeders;

use Softwarescares\Inteliinstaller\app\Models\SchoolTypes;
use Illuminate\Database\Seeder;
use Illuminate\Facades\DB;

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
