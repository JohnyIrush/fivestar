<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliinventory\app\Models\Hostel;
use Softwarescares\Inteliportal\app\Models\Gender;
use Softwarescares\Inteliportal\app\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Student::truncate();
        $faker = \Faker\Factory::create();
        $section = $faker->numberBetween(1, 8);
        Student::create(
            [
             "user_id" => 1,
             "firstname" => $faker->firstname(),
             "lastname" => $faker->lastname(),
             "bio" => $faker->paragraph(),
             "guardian_id" => 1,
             "gender_id" => Gender::all()->random()->id,
             "address" => $faker->address(),
             "role" => $faker->jobTitle(),

             "Admno" => $faker->numberBetween(1000, 2000),
             "section_id" => $section,
             "stream_id" => Section::find($section)->stream_id,
             "level_id" => Section::find($section)->level_id,

             "hostel_id" => Hostel::all()->random()->id,

             "previous_school" => $faker->company(),
             "type" => 'student'
        ]);
        $section = $faker->numberBetween(1, 8);
        Student::create(
            [
                "user_id" => 2,
                "firstname" => $faker->firstname(),
                "lastname" => $faker->lastname(),
                "bio" => $faker->paragraph(),
                "guardian_id" => 2,
                "gender_id" => Gender::all()->random()->id,
                "address" => $faker->address(),
                "role" => $faker->jobTitle(),

                "Admno" => $faker->numberBetween(1000, 2000),
                "section_id" => $section,
                "stream_id" => Section::find($section)->stream_id,
                "level_id" => Section::find($section)->level_id,

                "hostel_id" => Hostel::all()->random()->id,

                "previous_school" => $faker->company(),
                "type" => 'student'
        ]);
        $section = $faker->numberBetween(1, 8);
        Student::create(
            [
                "user_id" => 3,
                "firstname" => $faker->firstname(),
                "lastname" => $faker->lastname(),
                "bio" => $faker->paragraph(),
                "guardian_id" => 3,
                "gender_id" => Gender::all()->random()->id,
                "address" => $faker->address(),
                "role" => $faker->jobTitle(),

                "Admno" => $faker->numberBetween(1000, 2000),
                "section_id" => $section,
                "stream_id" => Section::find($section)->stream_id,
                "level_id" => Section::find($section)->level_id,

                "hostel_id" => Hostel::all()->random()->id,

                "previous_school" => $faker->company(),
                "type" => 'student'
        ]);

    }
}
