<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
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
        Role::truncate();
        Permission::truncate();

        Role::create(['name' => 'Supser Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Developer']);
        Role::create(['name' => 'SchoolAdmin']);
        Role::create(['name' => 'Author']);
        Role::create(['name' => 'Bursar']);
        Role::create(['name' => 'Suppot Team']);

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
