<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliadmission\app\Models\Status;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Status::truncate();

        $faker = \Faker\Factory::create();

        Status::create([
            "status" => "Accepted",
        ]);

        Status::create([
            "status" => "Rejected",
        ]);

        Status::create([
            "status" => "True",
        ]);

        Status::create([
            "status" => "False",
        ]);

        Status::create([
            "status" => "Active",
        ]);

        Status::create([
            "status" => "Inactive",
        ]);

        Status::create([
            "status" => "Failed",
        ]);

        Status::create([
            "status" => "Success",
        ]);

        Status::create([
            "status" => "Delivered",
        ]);

        Status::create([
            "status" => "Not Delivered",
        ]);
    }
}
