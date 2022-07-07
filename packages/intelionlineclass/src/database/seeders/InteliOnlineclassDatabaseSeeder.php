<?php

namespace Softwarescares\Intelionlineclass\database\seeders;

use Illuminate\Database\Seeder;

class InteliOnlineclassDatabaseSeeder extends Seeder
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
                OnlineClassSeeder::class
            ]
        );
    }
}
