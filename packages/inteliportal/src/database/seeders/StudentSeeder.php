<?php

namespace Softwarescares\Inteliportal\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Section;
use Softwarescares\Inteliinventory\app\Models\Hostel;
use Softwarescares\Inteliportal\app\Models\City;
use Softwarescares\Inteliportal\app\Models\Gender;
use Softwarescares\Inteliportal\app\Models\Student;
use Softwarescares\Inteliportal\app\Models\Town;

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
             "leaders_id" => $faker->jobTitle(),


             'dob' => $faker->date(),
             'age' => $faker->numberBetween(15,26),

             "city_id" => City::all()->random()->id,
             "town_id" => Town::all()->random()->id,

             "Admno" => $faker->numberBetween(1000, 2000),
             "section_id" => $section,
             "stream_id" => Section::find($section)->stream_id,
             "level_id" => Section::find($section)->level_id,

             "hostel_id" => Hostel::all()->random()->id,

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
                "leaders_id" => $faker->jobTitle(),

                'dob' => $faker->date(),
                'age' => $faker->numberBetween(15,26),

                "city_id" => City::all()->random()->id,
                "town_id" => Town::all()->random()->id,



                "Admno" => $faker->numberBetween(1000, 2000),
                "section_id" => $section,
                "stream_id" => Section::find($section)->stream_id,
                "level_id" => Section::find($section)->level_id,

                "hostel_id" => Hostel::all()->random()->id,

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
                "leaders_id" => $faker->jobTitle(),

                'age' => $faker->numberBetween(15,26),
                'dob' => $faker->date(),

                 "city_id" => City::all()->random()->id,
                 "town_id" => Town::all()->random()->id,


                "Admno" => $faker->numberBetween(1000, 2000),
                "section_id" => $section,
                "stream_id" => Section::find($section)->stream_id,
                "level_id" => Section::find($section)->level_id,

                "hostel_id" => Hostel::all()->random()->id,

                "type" => 'student'
        ]);

        $user_id = 60;

        for ($i=0; $i < 500; $i++)
        { 
        $section = $faker->numberBetween(1, 8);
        Student::create(
            [
                "user_id" => $user_id,
                "firstname" => $faker->firstname(),
                "lastname" => $faker->lastname(),
                "bio" => $faker->paragraph(),
                "guardian_id" => 3,
                "gender_id" => Gender::all()->random()->id,
                "address" => $faker->address(),
                "leaders_id" => $faker->jobTitle(),

                'age' => $faker->numberBetween(15,26),
                'dob' => $faker->date(),

                 "city_id" => City::all()->random()->id,
                 "town_id" => Town::all()->random()->id,


                "Admno" => $faker->numberBetween(1000, 2000),
                "section_id" => $section,
                "stream_id" => Section::find($section)->stream_id,
                "level_id" => Section::find($section)->level_id,

                "hostel_id" => Hostel::all()->random()->id,

                "type" => 'student'
        ]);

         $user_id++;

        }

    }
}
