<?php

namespace Softwarescares\Inteliform\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliform\app\Models\FieldSetting;

class FieldSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FieldSetting::truncate();

        $faker = \Faker\Factory::create();

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "type",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "autocomplete",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "autocorrect",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "required",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "disabled",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "minlength",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "maxlength",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "field",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "icon",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "component",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "description",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "placeholder",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "default",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "cols",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "rows",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "pattern",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "min",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "max",
            "value" => ''
        ]);

        FieldSetting::create([
            "field_id" => $faker->numberBetween(1,100),
            "key" => "size",
            "value" => ''
        ]);
    }
}
