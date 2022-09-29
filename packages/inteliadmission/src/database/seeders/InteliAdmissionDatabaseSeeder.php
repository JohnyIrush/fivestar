<?php

namespace Softwarescares\Inteliadmission\database\seeders;

use Illuminate\Database\Seeder;

class InteliAdmissionDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                StatusSeeder::class,
                ApplicantGoogleFormSeeder::class,
                AdmissionSeeder::class,
                ApplicantTypeSeeder::class,
                ApplicantSeeder::class
            ]
        );
    }
}
