<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserType;

class UserTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserType::truncate();

        UserType::create([
            'type' => 'Admin'
        ]);

        UserType::create([
            'type' => 'Staff'
        ]);

        UserType::create([
            'type' => 'Student'
        ]);

        UserType::create([
            'type' => 'Guardian'
        ]);

        UserType::create([
            'type' => 'User'
        ]);
    }
}
