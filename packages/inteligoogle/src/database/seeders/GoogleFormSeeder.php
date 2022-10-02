<?php

namespace Softwarescares\Inteligoogle\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteligoogle\app\Models\GoogleForm;

class GoogleFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GoogleForm::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 600; $i++)
        { 
          GoogleForm::create([
              "title" => $faker->company(),
              "form_id" => $faker->word()
          ]);
        }
    }
}
