<?php

namespace Softwarescares\Intelicommunication\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelicommunication\app\Models\Communication;
use Softwarescares\Inteliadmission\app\Models\Status;

class CommunicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Communication::truncate();

        $faker = \Faker\Factory::create();

        Communication::create([
            "user_id" => $faker->numberBetween(1,1500),
            "reason" => $faker->realText($faker->numberBetween(20,60)),
            "message" => $faker->paragraph(),
        ]);
    }
}
