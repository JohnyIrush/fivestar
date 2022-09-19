<?php

namespace Softwarescares\Inteliacademic\database\seeders;

use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Inteliacademic\app\Models\Stream;
use Illuminate\Database\Seeder;

class StreamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stream::truncate();

        $faker = \Faker\Factory::create();

        Stream::create([
            "avatar" => $faker->imageUrl(),
            'stream' => 'Purple',
            'status' => true,
        ]);

        Stream::create([
            "avatar" => $faker->imageUrl(),
            'stream' => 'Pink',
            'status' => true,
        ]);


    }

}
