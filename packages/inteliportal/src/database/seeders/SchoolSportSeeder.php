<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Sport;
use Softwarescares\Inteliportal\app\Models\School;
use Softwarescares\Inteliportal\app\Models\SchoolSport;

class SchoolSportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolSport::truncate();

        School::find(1)->sports()->attach(Sport::all());
    }
}
