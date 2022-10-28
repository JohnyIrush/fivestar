<?php

namespace Softwarescares\Inteliteam\database\seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Models\User;

use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::factory()->create(120);
    }
}
