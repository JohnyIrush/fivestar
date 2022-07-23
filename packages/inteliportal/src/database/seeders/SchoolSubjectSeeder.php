<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliportal\app\Models\School;
use Softwarescares\Inteliportal\app\Models\SchoolSubject;

class SchoolSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolSubject::truncate();

        School::find(1)->subjects()->attach(Subject::all());
    }
}
