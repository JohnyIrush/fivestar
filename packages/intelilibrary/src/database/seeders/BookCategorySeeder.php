<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelilibrary\app\Models\BookCategory;

class BookCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookCategory::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 50; $i++)
        {
            BookCategory::create([
                "image" => $faker->imageUrl(),
                "category" => $faker->word(30),
                "description" => $faker->paragraph(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
