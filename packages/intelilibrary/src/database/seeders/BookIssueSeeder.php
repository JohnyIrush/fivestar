<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelilibrary\app\Models\BookIssue;
use Softwarescares\Intelilibrary\app\Models\Book;
use Softwarescares\Inteliportal\app\Models\Student;

class BookIssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookIssue::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 100; $i++)
        {
            BookIssue::create([
            'student_id' => Student::all()->random()->id,
            'book_id' => Book::all()->random()->id,
            'issue_date' => $faker->date(),
            'return_date' => $faker->date(),
            'return_status' => $faker->boolean(),
            ]);
        }
    }
}
