<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelilibrary\app\Models\Book;

use Softwarescares\Intelilibrary\app\Models\BookCategory;
use Softwarescares\Intelilibrary\app\Models\Language;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 200; $i++)
        {
            Book::create([
            "book_category_id" => BookCategory::all()->random()->id,
            "title" => $faker->text(30),
            "title_long" => $faker->paragraph(),
            "isbn" => $faker->isbn10(),
            "isbn13" => $faker->isbn13(),
            "dewey_decimal_id" => $faker->numberBetween(1,10),
            "binding_id" => $faker->numberBetween(1,10),
            "language_id" => Language::all()->random()->id,
            "date_published" => $faker->date(),
            "edition" => $faker->word(),
            "pages" => $faker->numberBetween(30, 5000),
            "dimensions" => $faker->ipv4(),
            "overview" => $faker->paragraph(),
            "image" => $faker->imageUrl(),
            "msrp" => $faker->numberBetween(0, 10000),
            "price" => $faker->numberBetween(30, 5000),
            "excerpt" => $faker->paragraph(),
            "synopsys" => $faker->paragraph(),
            "no_of_copies" => $faker->numberBetween(30, 5000),
            "volume" => $faker->userName(),
            "status" => $faker->boolean(),
            ]);
        }  
    }
}
