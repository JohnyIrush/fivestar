<?php

namespace Softwarescares\Intelisecurity\database\seeders;

use Illuminate\Database\Seeder;

class InteliSecurityDatabaseSeeder extends Seeder
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
                SecuritySeeder::class
            ]
        );
    }
}
