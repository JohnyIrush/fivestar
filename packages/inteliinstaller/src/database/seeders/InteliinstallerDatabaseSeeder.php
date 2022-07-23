<?php

namespace Softwarescares\Inteliinstaller\database\seeders;


use Illuminate\Database\Seeder;

class InteliInstallerDatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(
            [
                InteliSeeder::class,
                SchoolAdminSeeder::class,
                FeatureSeeder::class,
                FeatureInteliSeeder::class
            ]
        );

    }
}
