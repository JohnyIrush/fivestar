<?php

namespace Softwarescares\Inteliteam\database\seeders;

use Illuminate\Database\Seeder;

class InteliTeamDatabaseSeeder extends Seeder
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
                PermissionRoleSeeder::class,
                RoleSeeder::class,
                SettingsSeeder::class,
                TaskSeeder::class,
                UserManagerSeeder::class,
            ]
        );

    }
}
