<?php

namespace Softwarescares\Inteliform\database\deeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                FormTemplateSeeder::class,
                FormSeeder::class
            ]
        );
    }
}
