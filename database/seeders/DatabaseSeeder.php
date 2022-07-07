<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteliacademic\database\seeders\InteliAcademicDatabaseSeeder;
use Softwarescares\Inteliadmission\database\seeders\InteliAdmissionDatabaseSeeder;
use Softwarescares\Inteliai\database\seeders\InteliAiDatabaseSeeder;
use Softwarescares\Intelicommunication\database\seeders\InteliCommunicationDatabaseSeeder;
use Softwarescares\Inteliconfig\database\seeders\InteliConfigDatabaseSeeder;
use Softwarescares\Intelielearn\database\seeders\InteliElearnDatabaseSeeder;
use Softwarescares\Inteliexam\database\seeders\InteliExamDatabaseSeeder;
use Softwarescares\Intelifinance\database\seeders\InteliFinanceDatabaseSeeder;
use Softwarescares\Inteliinstaller\database\seeders\InteliInstallerDatabaseSeeder;
use Softwarescares\Inteliinventory\database\seeders\InteliInventoryDatabaseSeeder;
use Softwarescares\Intelilibrary\database\seeders\InteliLibraryDatabaseSeeder;
use Softwarescares\Intelionlineclass\database\seeders\InteliOnlineclassDatabaseSeeder;
use Softwarescares\Intelipaypal\database\seeders\InteliPaypalDatabaseSeeder;
use Softwarescares\Inteliportal\database\seeders\InteliPortalDatabaseSeeder;
use Softwarescares\Inteliresource\database\seeders\InteliResourceDatabaseSeeder;
use Softwarescares\Intelisafaricomdaraja\database\seeders\InteliSafaricomdarajaDatabaseSeeder;
use Softwarescares\Intelisecurity\database\seeders\InteliSecurityDatabaseSeeder;
use Softwarescares\Inteliteam\database\seeders\InteliTeamDatabaseSeeder;
use Softwarescares\Intelitimetable\database\seeders\InteliTimetableDatabaseSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        (
            [
                InteliAcademicDatabaseSeeder::class,
                InteliAdmissionDatabaseSeeder::class,
                InteliAiDatabaseSeeder::class,
                InteliCommunicationDatabaseSeeder::class,
                InteliConfigDatabaseSeeder::class,
                InteliElearnDatabaseSeeder::class,
                InteliExamDatabaseSeeder::class,
                InteliFinanceDatabaseSeeder::class,
                InteliInstallerDatabaseSeeder::class,
                InteliInventoryDatabaseSeeder::class,
                InteliLibraryDatabaseSeeder::class,
                InteliOnlineclassDatabaseSeeder::class,
                InteliPortalDatabaseSeeder::class,
                InteliResourceDatabaseSeeder::class,
                InteliSafaricomdarajaDatabaseSeeder::class,
                InteliSecurityDatabaseSeeder::class,
                InteliAcademicDatabaseSeeder::class,
                InteliTeamDatabaseSeeder::class,
                InteliTimetableDatabaseSeeder::class,
                InteliPaypalDatabaseSeeder::class

            ]
        );
    }
}
