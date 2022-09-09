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
        $faker = \Faker\Factory::create();
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/ivana-square.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/ivancik.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/kal-visuals-square.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/marie.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/team-1.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/team-2.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/team-3.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/team-4.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/bruce-mars.jpg"
        ]);
        User::create(
            [
             'name' => $faker->name(),
             'email' => $faker->unique()->safeEmail(),
             'phone' => $faker->phoneNumber,
             'email_verified_at' => now(),
             'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
             'remember_token' => Hash::make("password2123"),
             "profile_photo_path" => "/theme/assets/img/DSC_0058 copy modified.jpg"
        ]);

        for ($i=0; $i <= 1500; $i++) {
            User::create(
                [
                 'name' => $faker->name(),
                 'email' => $faker->unique()->safeEmail(),
                 'phone' => $faker->phoneNumber,
                 'email_verified_at' => now(),
                 'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                 'remember_token' => Hash::make("password2123"),
                 "profile_photo_path" => $faker->imageUrl()
            ]);
        }


        User::find(43)->syncRoles([8]);
        User::find(44)->syncRoles([8]);
        User::find(45)->syncRoles([8]);
        User::find(50)->syncRoles([8]);
    }
}
