<?php

namespace Softwarescares\Inteli\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteli\app\Models\Inteli;

class InteliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inteli::truncate();

        Inteli::create(
            [
                'version' => "Community Edition",
                'price' => "1500",
                'image' => '/images/Products/Community.png'
            ]
        );

        Inteli::create(
            [
                'version' => "Ultimate Edition",
                'price' => "2500",
                'image' => '/images/Products/Ultimate.png'
            ]
        );

        Inteli::create(
            [
                'version' => "Ultra Edition",
                'price' => "5000",
                'image' => '/images/Products/Elite.png'
            ]
        );
    }
}
