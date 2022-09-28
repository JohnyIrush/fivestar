<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliadmission\app\Models\ApplicantGoogleForm;
use Softwarescares\Inteligoogle\app\Models\GoogleForm;
use Softwarescares\Inteliadmission\app\Models\Applicant;
use Softwarescares\Inteliadmission\app\Models\ApplicantType;

use App\Models\User;

class ApplicantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Applicant::truncate();
        ApplicantGoogleForm::truncate();

        $faker = \Faker\Factory::create();

        for ($i=1; $i < 300; $i++)
        { 

          $applicant = Applicant::create([
              "applicant_type_id" => ApplicantType::all()->random()->id,
              "user_id" => $faker->numberBetween(1,1000),
              "status" => $faker->boolean()
          ]);

          $applicant->googleForms()->attach(GoogleForm::find($i));
        }


    }
}
