<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Intelifinance\app\Models\Service;
use Softwarescares\Inteliacademic\app\Models\Level;
use Softwarescares\Intelitimetable\app\Models\Term;
use Softwarescares\Intelifinance\app\Models\Fee;

class FeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Fee::truncate();

        $faker = \Faker\Factory::create();

        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());

        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());

        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());


        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());


        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());



        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());


        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());


        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());

        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());

        $fee = Fee::create([
            "fee" => $faker->userName(),
            "description" => $faker->text(),
            "level_id" => Level::all()->random()->id,
            "term_id" => Term::all()->random()->id,
            "status" => $faker->boolean()
        ]);

        $fee->service()->attach(Service::all());
    }
}
