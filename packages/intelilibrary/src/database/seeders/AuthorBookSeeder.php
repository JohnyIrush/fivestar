<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelilibrary\app\Models\AuthorBook;

use Softwarescares\Intelilibrary\app\Models\Author;
use Softwarescares\Intelilibrary\app\Models\Book;


class AuthorBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorBook::truncate();

        $faker = \Faker\Factory::create();

        foreach (Book::all() as $book)
        {
            $book->authors()->attach(Author::all()->random(5));
        }
    }
}
