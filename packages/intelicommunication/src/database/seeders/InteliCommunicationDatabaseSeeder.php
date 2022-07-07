<?php

namespace Softwarescares\Intelicommunication\database\seeders;

use Illuminate\Database\Seeder;

class InteliCommunicationDatabaseSeeder extends Seeder
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
                CommunicationSeeder::class
            ]
        );
    }
}
