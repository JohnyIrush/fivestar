<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelilibrary\app\Models\Library;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Library::truncate();

        $faker = \Faker\Factory::create();
            for ($i=0; $i < 100; $i++)
            { 
              Library::create([
                  "Library" => $faker->company(),
                  "location" => $faker->address(),
              ]);
 
            }
    }
}
