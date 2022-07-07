<?php

namespace Softwarescares\Inteliinstaller\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinstaller\app\Models\Feature;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::truncate();

        // Default Features Must Have Features, Available in all products

        $faker = \Faker\Factory::create();

        Feature::create([
            "feature" => "Inteli Installer",
             "image" => " /images/Features/installer.jpg",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Config",
             "image" => " /images/Features/Config.jpg",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Security",
             "image" => " /images/Features/security.jpg",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Safaricom",
             "image" => " /images/Features/mpesa.png",
            "description" => $faker->paragraph()
        ]);

        // Available in all Products

        Feature::create([
            "feature" => "Inteli Admission",
             "image" => " /images/Features/admission.jpg",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Staff",
             "image" => " /images/Features/staff.png",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Academic",
             "image" => " /images/Features/academic.png",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Timetable",
             "image" => " /images/Features/timetable.png",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Exam",
             "image" => " /images/Features/Exam.png",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Finance",
             "image" => " /images/Features/finance.png",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Inventory",
             "image" => " /images/Features/inventory.png",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Library",
             "image" => " /images/Features/library.png",
            "description" => $faker->paragraph()
        ]);


        Feature::create([
            "feature" => "Inteli Portal",
             "image" => " /images/Features/portal.jpg",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Resource",
             "image" => " /images/Features/resources.jpg",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Team",
             "image" => " /images/Features/team.png",
            "description" => $faker->paragraph()
        ]);

        // Available in Ultimate & Elite Products Only

        Feature::create([
            "feature" => "Inteli Electornic Learning",
             "image" => " /images/Features/elearn.jpg",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Communication",
             "image" => " /images/Features/communication.png",
            "description" => $faker->paragraph()
        ]);

        Feature::create([
            "feature" => "Inteli Online Class",
             "image" => " /images/Features/online class.png",
            "description" => $faker->paragraph()
        ]);

        // Available in Elite Product Only

        Feature::create([
            "feature" => "Inteli Artificial Inteligence",
             "image" => " /images/Features/artificial-intelligence.png",
            "description" => $faker->paragraph()
        ]);
    }
}
