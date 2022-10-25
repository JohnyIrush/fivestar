<?php

namespace Softwarescares\Inteli\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteli\app\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::truncate();

        $faker = \Faker\Factory::create();

        Theme::create([
            "name" => "default glass theme",
            "key" => "default-theme-glass",
            "image" => $faker->imageUrl(),
            "status" => true
        ]);

        Theme::create([
            "name" => "dark glass theme",
            "key" => "dark-theme-glass",
            "image" => $faker->imageUrl(),
            "status" => false
        ]);

        Theme::create([
            "name" => "light glass theme",
            "key" => "light-theme-glass",
            "image" => $faker->imageUrl(),
            "status" => false
        ]);

        Theme::create([
            "name" => "default neo theme",
            "key" => "default-theme-neo",
            "image" => $faker->imageUrl(),
            "status" => false
        ]);

        Theme::create([
            "name" => "dark neo theme",
            "key" => "dark-theme-neo",
            "image" => $faker->imageUrl(),
            "status" => false
        ]);

        Theme::create([
            "name" => "light neo theme",
            "key" => "light-theme-neo",
            "image" => $faker->imageUrl(),
            "status" => false
        ]);
    }
}
