<?php

namespace Softwarescares\Inteliportal\database\seeders;
use Illuminate\Database\Seeder;
use Softwarescares\Inteliportal\app\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::truncate();

        Gender::create(
            ['gender' => 'male']
        );

        Gender::create(
            ['gender' => 'female']
        );
        /*

        Gender::create(
            ['gender' => 'gender neutral']
        );

        Gender::create(
            ['gender' => 'non-binary']
        );

        Gender::create(
            ['gender' => 'agender']
        );

        Gender::create(
            ['gender' => 'pangender']
        );

        Gender::create(
            ['gender' => 'genderqueer']
        );

        Gender::create(
            ['gender' => 'two-spirit']
        );

        Gender::create(
            ['gender' => 'third gender']
        );*/
    }
}
