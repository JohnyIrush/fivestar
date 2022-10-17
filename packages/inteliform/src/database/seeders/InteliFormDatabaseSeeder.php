<?php

namespace Softwarescares\Inteliform\database\seeders;

use Illuminate\Database\Seeder;

class InteliFormDatabaseSeeder extends Seeder
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
