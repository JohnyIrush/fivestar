<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliinventory\app\Models\Inventory;
use Softwarescares\Intelistaff\app\Models\Department;
use Softwarescares\Inteliinventory\app\Models\DepartmentInventory;


class DepartmentInventorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DepartmentInventory::truncate();

        for($i = 1; $i <= Inventory::all()->count(); $i++)
        {
            Inventory::find($i)->department()->attach(Department::all()->random(5));
        }
    }
}
