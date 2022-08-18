<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Expense;
use Softwarescares\Inteliinventory\app\Models\ExpenseCategory;

class ExpenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Expense::truncate();

        $faker = \Faker\Factory::create();

        for ($i=0; $i < 20; $i++)
        {
            Expense::create([
                "expense" => $faker->realText(),
                "date" => $faker->date(),
                "expense_category_id" => ExpenseCategory::all()->random()->id,
                "total" => $faker->numberBetween(50, 10000),
                "user_id" => $faker->numberBetween(1, 60),
            ]);
        }
    }
}
