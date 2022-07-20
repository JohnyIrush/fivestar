<?php

namespace Softwarescares\Intelistaff\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelistaff\app\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::truncate();

        Category::create([
            "category" => "Teaching Staff"
        ]);

        Category::create([
            "category" => "Non-Teaching Staff"
        ]);
    }
}
