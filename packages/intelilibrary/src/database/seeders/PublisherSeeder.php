<?php

namespace Softwarescares\Intelilibrary\database\seeders;


use Illuminate\Database\Seeder;
use Softwarescares\Intelilibrary\app\Models\Publisher;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Publisher::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 300; $i++)
        {
            Publisher::create([
                "publisher" => $faker->company(),
                "avatar" => $faker->imageUrl(),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber(),
                'address' => $faker->address(),
                'website' => $faker->url(),
            ]);
        } 
    }
}
