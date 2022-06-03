<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Task;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Task::truncate();
        $faker = \Faker\Factory::create();
        Task::create(
            [
             'description' => $faker->realText(10),
        ]);

        Task::create(
            [
             'description' => $faker->realText(10),
        ]);

        Task::create(
            [
             'description' => $faker->realText(10),
        ]);

        Task::create(
            [
             'description' => $faker->realText(10),
        ]);

        Task::create(
            [
             'description' => $faker->realText(10),
        ]);

        Task::create(
            [
             'description' => $faker->realText(10),
        ]);

    }
}
