<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\StudentSubject;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliportal\app\Models\Student;

class StudentSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        StudentSubject::truncate();
        Student::find(1)->subjects()->attach(Subject::all());

        Student::find(2)->subjects()->attach(Subject::all());

        Student::find(3)->subjects()->attach(Subject::all());
    }
}
