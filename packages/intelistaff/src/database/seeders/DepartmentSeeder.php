<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelistaff\app\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();

        $faker = \Faker\Factory::create();

        Department::create([
            "icon" => $faker->imageUrl(),
            'department' => 'Mathematics'
        ]);

        Department::create([
            "icon" => $faker->imageUrl(),
            'department' => 'Science'
        ]);

        Department::create([
            "icon" => $faker->imageUrl(),
            'department' => 'Humanities'
        ]);

        Department::create([
            "icon" => $faker->imageUrl(),
            'department' => 'Psychology'
        ]);

        Department::create([
            "icon" => $faker->imageUrl(),
            'department' => 'Applied'
        ]);
    }
}
