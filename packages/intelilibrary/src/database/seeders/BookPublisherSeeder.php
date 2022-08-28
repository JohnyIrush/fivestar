<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelilibrary\app\Models\BookPublisher;

use Softwarescares\Intelilibrary\app\Models\Book;
use Softwarescares\Intelilibrary\app\Models\Publisher;

class BookPublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BookPublisher::truncate();

        $faker = \Faker\Factory::create();

        foreach (Book::all() as $book)
        {
            $book->publishers()->attach(Publisher::all()->random(5));
        }
    }
}
