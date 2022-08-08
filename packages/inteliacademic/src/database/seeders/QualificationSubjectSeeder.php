<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Qualification;
use Softwarescares\Inteliacademic\app\Models\QualificationSubject;
use Softwarescares\Inteliacademic\app\Models\Subject;

class QualificationSubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        QualificationSubject::truncate();

        Qualification::find(1)->subjects()->attach([1,2,3,4,5,6,7,8]);
        Qualification::find(2)->subjects()->attach([1,2,3,4,5,6,7,8]);
        Qualification::find(3)->subjects()->attach([1,2,3,4,5,6,7,8]);
    }
}
