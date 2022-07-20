<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Club;
use Softwarescares\Inteliacademic\app\Models\ClubStudent;
use Softwarescares\Inteliportal\app\Models\Student;

class ClubStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ClubStudent::truncate();

        Student::find(1)->clubs()->attach(Club::all()->random(5));
        Student::find(2)->clubs()->attach(Club::all()->random(5));
        Student::find(3)->clubs()->attach(Club::all()->random(5));
    }
}
