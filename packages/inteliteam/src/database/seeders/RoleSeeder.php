<?php

namespace Softwarescares\Inteliteam\database\seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::truncate();

        Role::create(['name' => 'Supser Admin']);
        Role::create(['name' => 'Admin']);
        Role::create(['name' => 'Developer']);
        Role::create(['name' => 'School Admin']);
        Role::create(['name' => 'Author']);
        Role::create(['name' => 'Bursar']);
        Role::create(['name' => 'Suppot Team']);
        Role::create(['name' => 'WareHouse/Store Keeper']);
    }
}
