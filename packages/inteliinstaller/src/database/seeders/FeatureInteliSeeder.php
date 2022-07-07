<?php

namespace Softwarescares\Inteliinstaller\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Inteliinstaller\app\Models\Feature;
use Softwarescares\Inteliinstaller\app\Models\FeatureInteli;
use Softwarescares\Inteliinstaller\app\Models\Inteli;

class FeatureInteliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FeatureInteli::truncate();

        $communityFeatures = Feature::find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15]);
        Inteli::find(1)->features()->attach($communityFeatures);

        $ultimateFeatures = Feature::find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18]);
        Inteli::find(2)->features()->attach($ultimateFeatures);

        $eliteFeatures = Feature::find([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 18, 19]);
        Inteli::find(3)->features()->attach($eliteFeatures);

    }
}
