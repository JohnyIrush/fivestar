<?php

namespace Softwarescares\Inteliportal\database\seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Softwarescares\Inteliinstaller\app\Models\Inteli;
use Softwarescares\Inteliportal\app\Models\School;
use Softwarescares\Inteliportal\app\Models\SchoolEducationSystem;
use Softwarescares\Inteliportal\app\Models\SchoolGender;
use Softwarescares\Inteliportal\app\Models\SchoolLevel;
use Softwarescares\Inteliportal\app\Models\SchoolTypes;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        School::truncate();

        $faker = \Faker\Factory::create();

        School::create([
            'school_name' => $faker->name(),
            'school_email' => $faker->email(),
            'school_address' => $faker->address(),
            'school_web' => $faker->url(),
            'school_level_id' => SchoolLevel::all()->random()->id,
            'school_phone' => $faker->phoneNumber(),
            'school_location' => $faker->city(),

            'school_logo_path' => $faker->imageUrl(),
            'motto' => $faker->paragraph(),

            'school_gender_id' => SchoolGender::all()->random()->id,
            'school_type_id' => SchoolTypes::all()->random()->id,
            'school_education_system_id' => SchoolEducationSystem::all()->random()->id,

            'user_id' => 60,
            'inteli_id' =>   $faker->numberBetween(1, 3),
            'inteli_code' =>  $faker->text(15),
            'installation_status' => true,

            'account_id' => 11,
        ]);
    }
}
