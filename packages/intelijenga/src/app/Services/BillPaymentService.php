<?

namespace Softwarescares\Intelijenga\app\Services;

use Softwarescares\Intelijenga\app\Extensions\Transaction;

class BillPaymentService extends Transaction
{
    use AuthorizationService;

    public function transaction($accountNumber, $amount)
    {
       $url = env("JENGA_API_ENV") == "production" ? "" : "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/bills/pay";


       $body = [
        "biller" =>
            [
             "billerCode" => "320320",
            "countryCode" => "KE"
            ],
        "bill" =>
            ["reference" => "111222",
            "amount" => "100.00",
            "currency" => "KES"
            ],
        "payer" =>
            ["name"=>"A N.Other",
            "account"=>"111222",
            "reference"=>"123456729123",
            "mobileNumber"=>"0763000000"
        ],
        "partnerId"=>"0011547896523"

        ];

       $type = 'POST';

       return $this->serviceRequest($url, $body, $type);
    }

}
