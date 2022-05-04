<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinstaller\app\Models\SchoolGender;

class SchoolGenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SchoolGender::truncate();

        SchoolGender::create(
            ['gender' => 'Girls']
        );

        SchoolGender::create(
            ['gender' => 'Boys']
        );

        SchoolGender::create(
            ['gender' => 'Mixed']
        );
    }
}
