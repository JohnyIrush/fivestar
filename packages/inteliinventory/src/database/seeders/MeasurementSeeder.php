<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinventory\app\Models\Measurement;

class MeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Measurement::truncate();

        $faker = \Faker\Factory::create();

        Measurement::create([
            "measurement" => "millimeter"
        ]);

        Measurement::create([
            "measurement" => "Centimeter"
        ]);

        Measurement::create([
            "measurement" => "Decimeter"
        ]);

        Measurement::create([
            "measurement" => "Meter"
        ]);

        Measurement::create([
            "measurement" => "Demetre"
        ]);

        Measurement::create([
            "measurement" => "Hectometer"
        ]);

        Measurement::create([
            "measurement" => "kilometer"
        ]);
    }
}
