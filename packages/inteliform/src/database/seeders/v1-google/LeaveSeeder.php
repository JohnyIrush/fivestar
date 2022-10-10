<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliadmission\app\Models\GoogleFormLeave;
use Softwarescares\Inteligoogle\app\Models\GoogleForm;
use Softwarescares\Inteliadmission\app\Models\Leave;
use Softwarescares\Inteliadmission\app\Models\LeaveType;

class LeaveSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leave::truncate();
        GoogleFormLeave::truncate();

        $faker = \Faker\Factory::create();

        for ($i=600; $i < 900; $i++)
        { 

          $leave = Leave::create([
              "leave_type_id" => LeaveType::all()->random()->id,
              "user_id" => $faker->numberBetween(1,1000),
              "status_id" => $faker->numberBetween(1,5)
          ]);

          $leave->googleForms()->attach(GoogleForm::find($i));
        }
    }
}
