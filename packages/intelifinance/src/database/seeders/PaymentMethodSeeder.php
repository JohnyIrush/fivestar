<?php

namespace Softwarescares\Intelifinance\database\seeders;

use Illuminate\Database\Seeder;
use Softwarescares\Intelifinance\app\Models\PaymentMethod;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaymentMethod::truncate();

        PaymentMethod::create([
            "method" => "Mpesa"
        ]);

        PaymentMethod::create([
            "method" => "Paypal"
        ]);

        PaymentMethod::create([
            "method" => "Equity Bank"
        ]);

        PaymentMethod::create([
            "method" => "Coopertive Bank"
        ]);

        PaymentMethod::create([
            "method" => "Family Bank"
        ]);

        PaymentMethod::create([
            "method" => "KCB Bank"
        ]);

        PaymentMethod::create([
            "method" => "T-Kash"
        ]);

        PaymentMethod::create([
            "method" => "Airtel Money"
        ]);

        PaymentMethod::create([
            "method" => "Credit/Debit Cards"
        ]);
    }
}
