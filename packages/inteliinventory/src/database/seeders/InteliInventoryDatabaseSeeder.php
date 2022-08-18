<?php

namespace Softwarescares\Inteliinventory\database\seeders;

use Illuminate\Database\Seeder;

class InteliInventoryDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call
        ([
                HostelSeeder::class,
                RoomSeeder::class,
                WarehouseSeeder::class,
                ProductCategorySeeder::class,
                ProductTypeSeeder::class,
                BrandSeeder::class,
                SupplierSeeder::class,
                ManufacturerSeeder::class,
                ProductSeeder::class,
                AttributeSeeder::class,
                ExpenseCategorySeeder::class,
                ExpenseSeeder::class,
                MeasurementSeeder::class,
                ReportSeeder::class,
                WeightSeeder::class,
                SupplierSeeder::class,
                CustomerSeeder::class,
                PaymentTypeSeeder::class,
                InvoiceSeeder::class,
                SaleSeeder::class,
                PurchaseSeeder::class,
                ReportSeeder::class,
                WeightSeeder::class,
                InventorySeeder::class,
                DepartmentInventorySeeder::class,
                GovermentSeeder::class,
                DonationTypeSeeder::class,
                DonationSeeder::class,
                RateSeeder::class,
                ConsumptionSeeder::class,
                AuctionSeeder::class
            ]);
    }
}
