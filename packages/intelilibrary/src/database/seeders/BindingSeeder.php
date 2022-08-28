<?php

namespace Softwarescares\Intelilibrary\database\seeders;

use Illuminate\Database\Seeder; 

use Softwarescares\Intelilibrary\app\Models\Binding;

class BindingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Binding::truncate();

        $faker = \Faker\Factory::create();

        Binding::create([
            "binding" => "Saddle stitch binding",
        ]);

        Binding::create([
            "binding" => "PUR binding",
        ]);

        Binding::create([
            "binding" => "Hardcover or case binding",
        ]);

        Binding::create([
            "binding" => "Singer sewn binding",
        ]);

        Binding::create([
            "binding" => "Section sewn binding",
        ]);

        Binding::create([
            "binding" => "Coptic stitch binding",
        ]);

        Binding::create([
            "binding" => "Wiro, comb or spiral binding",
        ]);

        Binding::create([
            "binding" => "Interscrew binding",
        ]);

        Binding::create([
            "binding" => "Japanese binding",
        ]);

        Binding::create([
            "binding" => "Solander boxes and slipcases",
        ]);
         
    }
}
