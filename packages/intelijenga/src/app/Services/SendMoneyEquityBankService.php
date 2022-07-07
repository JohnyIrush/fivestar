<?

namespace Softwarescares\Intelijenga\app\Services;

use Softwarescares\Intelijenga\app\Extensions\Transaction;

class SendMoneyEquityBankService extends Transaction
{

    public function transaction($accountNumber, $amount)
    {
       $url = env("JENGA_API_ENV") == "production" ? "" : "https://uat.finserve.africa/v3-apis/account-api/v3.0/accounts/ministatement";

       $body = [
        "source" => [
            "countryCode" => env("JENGA_API_COUNTRY_CODE"),
            "name" => "A N.Other",
            "accountNumber" => $accountNumber
        ],
        "destination" => [
            "type" => "bank",
            "countryCode" => env("JENGA_API_COUNTRY_CODE"),
            "name" => "John Doe",
            "accountNumber" => $accountNumber],
        "transfer" => [
            "type" => "InternalFundsTransfer",
            "amount" => $amount,
            "currencyCode" => env("JENGA_API_CURRENCY_CODE"),
            "reference" => "692194625798",
            "date" => "2018-08-18",
            "description" => "some remarks here"
        ]
       ];


       $type = 'POST';

       return $this->serviceRequest($url, $body, $type);
    }

}
