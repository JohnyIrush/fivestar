<?php

namespace Softwarescares\Inteliteam\database\seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Permission;

class PermissionRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::truncate();

        Permission::create(['name' => 'Delete']);
        Permission::create(['name' => 'Edit']);
        Permission::create(['name' => 'Pay']);
        Permission::create(['name' => 'Create record']);
        Permission::create(['name' => 'Upgrade']);
        Permission::create(['name' => 'install']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'unistall']);
    }
}
