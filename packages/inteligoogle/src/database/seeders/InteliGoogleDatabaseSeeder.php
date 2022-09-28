<?php

namespace Softwarescares\Inteligoogle\database\seeders;

use Illuminate\Database\Seeder;

class InteliGoogleDatabaseSeeder extends Seeder
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
                GoogleSeeder::class,
                GoogleDocSeeder::class,
                GoogleFormSeeder::class,
                GoogleFormTemplateSeeder::class
            ]
        );
    }
}
