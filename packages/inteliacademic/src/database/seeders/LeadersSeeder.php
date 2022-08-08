<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliacademic\app\Models\Leaders;

class LeadersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Leaders::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 10; $i++)
        {
            Leaders::create([
                'leadership' => $faker->colorName()
            ]);
        }
    }
}
