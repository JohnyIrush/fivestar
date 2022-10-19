<?php

namespace Softwarescares\Intelicareer\database\seeders;

use Illuminate\Database\Seeder;

class InteliCareerDatabaseSeeder extends Seeder
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
                CareerSeeder::class
            ]
        );
    }
}
