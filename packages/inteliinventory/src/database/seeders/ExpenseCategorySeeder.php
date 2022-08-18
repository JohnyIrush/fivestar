<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\ExpenseCategory;

class ExpenseCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpenseCategory::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            ExpenseCategory::create([
                "image" => $faker->imageUrl(),
                "category" => $faker->realText(10),
                "description" => $faker->paragraph(),
                "status" => $faker->boolean(),
            ]);
        }
    }
}
