<?php

namespace Softwarescares\Intelicommunication\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelicommunication\app\Models\CommunicationMethod;

class CommunicationMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CommunicationMethod::truncate();

        $faker = \Faker\Factory::create();

        CommunicationMethod::create([
            "method" => "Email",
            "status_id" => $faker->numberBetween(1,10),
            "icon" => '<i class="fas fa-envelope"></i>'
        ]);

        CommunicationMethod::create([
            "method" => "WhatsApp",
            "status_id" => $faker->numberBetween(1,10),
            "icon" => '<i class="fab fa-whatsapp-square"></i>'
        ]);

        CommunicationMethod::create([
            "method" => "SMS",
            "status_id" => $faker->numberBetween(1,10),
            "icon" => '<i class="fas fa-sms"></i>'
        ]);

        CommunicationMethod::create([
            "method" => "phone",
            "status_id" => $faker->numberBetween(1,10),
            "icon" => '<i class="fas fa-phone"></i>'
        ]);
    }
}
