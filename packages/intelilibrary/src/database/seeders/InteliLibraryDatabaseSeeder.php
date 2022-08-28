<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder;

class InteliLibraryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                LanguageSeeder::class,
                LibrarySeeder::class,
                BookCategorySeeder::class,
                BookSeeder::class,
                AuthorSeeder::class,
                AuthorBookSeeder::class,
                PublisherSeeder::class,
                BookIssueSeeder::class,
                AuthorBookSeeder::class,
                BookPublisherSeeder::class,
                BindingSeeder::class,
                DeweyDecimalSeeder::class
            ]
        );
    }
}
