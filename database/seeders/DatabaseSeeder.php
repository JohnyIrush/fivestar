<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Softwarescares\Inteli\database\seeders\InteliDatabaseSeeder;
use Softwarescares\Inteligoogle\database\seeders\InteliGoogleDatabaseSeeder;
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
use Softwarescares\Intelistaff\database\seeders\InteliStaffDatabaseSeeder;
use Softwarescares\Inteliteam\database\seeders\InteliTeamDatabaseSeeder;
use Softwarescares\Intelitimetable\database\seeders\InteliTimetableDatabaseSeeder;

use Softwarescares\Inteliform\database\seeders\InteliFormDatabaseSeeder;


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
                InteliDatabaseSeeder::class,
                InteliFormDatabaseSeeder::class,
                InteliGoogleDatabaseSeeder::class,
                InteliStaffDatabaseSeeder::class,
                InteliAcademicDatabaseSeeder::class,
                InteliInventoryDatabaseSeeder::class,
                InteliPortalDatabaseSeeder::class,
                InteliAdmissionDatabaseSeeder::class,
                InteliAiDatabaseSeeder::class,
                InteliCommunicationDatabaseSeeder::class,
                InteliConfigDatabaseSeeder::class,
                InteliElearnDatabaseSeeder::class,
                InteliFinanceDatabaseSeeder::class,
                InteliInstallerDatabaseSeeder::class,
                InteliLibraryDatabaseSeeder::class,
                InteliOnlineclassDatabaseSeeder::class,
                InteliResourceDatabaseSeeder::class,
                InteliSafaricomdarajaDatabaseSeeder::class,
                InteliSecurityDatabaseSeeder::class,
                InteliAcademicDatabaseSeeder::class,
                InteliTeamDatabaseSeeder::class,
                InteliTimetableDatabaseSeeder::class,
                InteliPaypalDatabaseSeeder::class,
                InteliExamDatabaseSeeder::class,
            ]
        );
    }
}