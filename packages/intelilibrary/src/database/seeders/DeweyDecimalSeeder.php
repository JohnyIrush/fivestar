<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelilibrary\app\Models\DeweyDecimal;

class DeweyDecimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DeweyDecimal::truncate();

      $faker = \Faker\Factory::create();

      DeweyDecimal::create([
        "dewey_decimal" => 000,
        "description" => "Computer science, information and general works"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>100,
        "description" => "Philosophy and psychology"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>200,
        "description" => "Religion"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>300,
        "description" => "Social sciences"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>400,
        "description" => "Language"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>500,
        "description" => "Pure Science"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>600,
        "description" => "Technology"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>700,
        "description" => "Arts and recreation"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>800,
        "description" => "Literature"
      ]);

      DeweyDecimal::create([
        "dewey_decimal" =>900,
        "description" => "History and geography"
      ]);
    }
}
