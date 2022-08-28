<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelilibrary\app\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Author::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Author::create([
                "profile_photo_path" => $faker->imageUrl(),
                "firstname" => $faker->firstName(),
                "lastname" => $faker->lastName(),
                "email" => $faker->email(),
                "phone" => $faker->phoneNumber(),
                "status" => $faker->boolean(),
                'dob' => $faker->date(),
                'address' => $faker->address(),
                'website' => $faker->url(),
            ]);
        }
    }
}
