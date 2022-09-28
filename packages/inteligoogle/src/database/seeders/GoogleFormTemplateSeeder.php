<?php

namespace Softwarescares\Inteligoogle\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteligoogle\app\Models\GoogleFormTemplate;

class GoogleFormTemplateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GoogleFormTemplate::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 30; $i++)
        { 
          GoogleFormTemplate::create([
              "title" => $faker->company(),
              "form_id" => $faker->word()
          ]);
        }
    }
}
