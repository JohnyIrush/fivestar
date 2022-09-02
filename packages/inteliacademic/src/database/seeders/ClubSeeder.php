<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Club;

class ClubSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Club::truncate();
        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Club::create([
                "club" => $faker->city(),
                "icon_path" => $faker->imageUrl(100, 100),
                "status" => $faker->boolean()
            ]);
        }
    }
}
