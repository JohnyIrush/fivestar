<?php

namespace Softwarescares\Inteliresource\database\seeders;

use Illuminate\Database\Seeder;

class InteliResourceDatabaseSeeder extends Seeder
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
                FileManagerSeeder::class,
                FileUploadSeeder::class,
                GallerySeeder::class,
                SettingsSeeder::class
            ]
        );
    }
}
