<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Sport;
use Softwarescares\Inteliacademic\app\Models\SportStudent;
use Softwarescares\Inteliportal\app\Models\Student;

class SportStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SportStudent::truncate();

        Student::find(1)->sports()->attach(Sport::all()->random(5));
        Student::find(2)->sports()->attach(Sport::all()->random(5));
        Student::find(3)->sports()->attach(Sport::all()->random(5));
    }
}
