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
                SchoolTypesSeeder::class,
                InteliSeeder::class,
                SchoolAdminSeeder::class,
                SchoolEducationSystemSeeder::class,
                SchoolGenderSeeder::class,
                SchoolLevelSeeder::class,
                SchoolSeeder::class,
                SchoolTypesSeeder::class,
                FeatureSeeder::class,
                FeatureInteliSeeder::class
            ]
        );

    }
}
