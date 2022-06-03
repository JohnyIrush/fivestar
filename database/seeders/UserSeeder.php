<?php

namespace Database\Seeders;

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
        $faker = \Faker\Factory::create();
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
        ]);
    }
}
