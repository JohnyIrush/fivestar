<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Sport::truncate();
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Sport::create([
                "sport" => $faker->city(),
                "icon_path" => $faker->imageUrl(100, 100),
                "status" => $faker->boolean()
            ]);
        }
    }
}
