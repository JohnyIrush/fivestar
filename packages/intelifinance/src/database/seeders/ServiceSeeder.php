<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelifinance\app\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::truncate();

        Service::create([
            "service" => "Fees/Tution"
        ]);

        Service::create([
            "service" => "Books"
        ]);

        Service::create([
            "service" => "Remedial"
        ]);

        Service::create([
            "service" => "Exam"
        ]);

        Service::create([
            "service" => "Tours/Trips"
        ]);
    }
}
