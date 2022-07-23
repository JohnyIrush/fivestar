<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\LevelStream;
use Softwarescares\Inteliacademic\app\Models\LevelStreamTeacher;
use Softwarescares\Inteliacademic\app\Models\LevelTeacher;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Softwarescares\Inteliacademic\app\Models\Subject;
use Softwarescares\Inteliacademic\app\Models\SubjectTeacher;
use Softwarescares\Intelistaff\app\Models\Department;
use Softwarescares\Intelistaff\app\Models\Staff;
use Softwarescares\Intelistaff\app\Models\Teacher;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Teacher::truncate();

        DB::table('level_teacher')->truncate();
        //SubjectTeacher::truncate();

        $staff = Staff::where('category_id', 1)->get();

        foreach($staff as $teacher)
        {
            Teacher::create([
                'department_id' => Department::all()->random()->id,
                'staff_id' => $teacher->id
            ]);
        }

        foreach(Teacher::all() as $teacher)
        {
            $teacher->levels()->attach(Level::all());
        }



        for($i = 1; $i < sizeof(Teacher::all()); $i++)
        {
            Teacher::find($i)->subjects()->attach(Subject::all()->random(3));

        }

        //for($i = 1; $i < sizeof(Softwarescares\Intelistaff\app\Models\Teacher::all()); $i++){Softwarescares\Intelistaff\app\Models\Teacher::find(1)->subjects()->attach(Softwarescares\Inteliacademic\app\Models\Subject::all()->random(3));}
        # Softwarescares\Intelistaff\app\Models\Teacher\SubjectTeacher::all()

    }
}
