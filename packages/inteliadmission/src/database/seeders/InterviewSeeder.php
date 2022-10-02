<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteligoogle\app\Models\GoogleForm;
use Softwarescares\Inteliadmission\app\Models\GoogleFormInterview;
use Softwarescares\Inteliadmission\app\Models\Interview;


class InterviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Interview::truncate();
        GoogleFormInterview::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i < 300; $i++)
        { 

          $interview = Interview::create([
              "applicant_id" => $i,
              "interview_type_id" => $faker->numberBetween(1,2),
              "status_id" => $faker->numberBetween(1,5)
          ]);

          $interview->googleForms()->attach(GoogleForm::find($i + 300));
        }

    }
}
