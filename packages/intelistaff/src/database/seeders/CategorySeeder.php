<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelistaff\app\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::truncate();

        $faker = \Faker\Factory::create();

        Category::create([
            "icon" => $faker->imageUrl(),
            "category" => "Teaching Staff"
        ]);

        Category::create([
            "icon" => $faker->imageUrl(),
            "category" => "Non-Teaching Staff"
        ]);
    }
}
