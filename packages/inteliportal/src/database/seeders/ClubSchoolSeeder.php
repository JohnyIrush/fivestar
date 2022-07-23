<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Club;
use Softwarescares\Inteliportal\app\Models\ClubSchool;
use Softwarescares\Inteliportal\app\Models\School;

class ClubSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClubSchool::truncate();

        School::find(1)->clubs()->attach(Club::all());
    }
}
