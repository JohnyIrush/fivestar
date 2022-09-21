<?php

namespace Softwarescares\Inteliexam\database\seeders;

use Illuminate\Database\Seeder;

class InteliExamDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                ExamSeeder::class,
                GradeSeeder::class,
                MeritSeeder::class  
            ]
        );
    }
}
