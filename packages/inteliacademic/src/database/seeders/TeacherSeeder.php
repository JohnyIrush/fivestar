<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\LevelStream;
use Softwarescares\Inteliacademic\app\Models\LevelStreamTeacher;
use Softwarescares\Inteliacademic\app\Models\LevelTeacher;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Softwarescares\Inteliacademic\app\Models\Teacher;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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

        Teacher::create([
            'teacher' => 'Chepkuon',
            'level_id' => 2,
            'department_id' => 1,
        ]);


        Teacher::create([
            'teacher' => 'Walter White',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Laurence Krauss',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Abdul Bari',
            'level_id' => 2,
            'department_id' => 3,
        ]);

        Teacher::create([
            'teacher' => 'Richard Dawkins',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Neil deGrasse ',
            'level_id' => 2,
            'department_id' => 4,
        ]);

        Teacher::create([
            'teacher' => 'Dr. Paul Dobransky',
            'level_id' => 2,
            'department_id' => 2,
        ]);

        Teacher::create([
            'teacher' => 'Eminem',
            'level_id' => 2,
            'department_id' => 5,
        ]);

        foreach(Teacher::all() as $teacher)
        {
            $teacher->levels()->attach(Level::all());
        }

        foreach(Teacher::all() as $teacher)
        {
            $teacher->streams()->attach(Stream::inRandomOrder()->take(rand(1,3))->pluck('id'));
        }
    }
}
