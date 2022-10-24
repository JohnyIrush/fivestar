<?php

namespace Softwarescares\Inteli\database\seeders;

use Illuminate\Database\Seeder;

use namespace Softwarescares\Inteli\app\Models\Theme;

class ThemeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Theme::truncate();

        Theme::create([
            "name" => "default glass theme",
            "status" => true
        ]);

        Theme::create([
            "name" => "dark glass theme",
            "status" => false
        ]);

        Theme::create([
            "name" => "light glass theme",
            "status" => false
        ]);

        Theme::create([
            "name" => "default neo theme",
            "status" => false
        ]);

        Theme::create([
            "name" => "dark neo theme",
            "status" => false
        ]);

        Theme::create([
            "name" => "light neo theme",
            "status" => false
        ]);
    }
}
