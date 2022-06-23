<?

namespace Softwarescares\Intelijenga\app\Services;

use Softwarescares\Intelijenga\app\Extensions\Transaction;

class MobileWalletService extends Transaction
{
    use AuthorizationService;

    public function transaction($accountNumber, $amount)
    {
       $url = env("JENGA_API_ENV") == "production" ? "" : "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/remittance/sendmobile";

       $body = [
        "source" => [
            "countryCode" => env("JENGA_API_COUNTRY_CODE"),
            "name" => "A N.Other",
            "accountNumber" => $accountNumber
        ],
        "destination" => [
            "type" => "mobile",
            "countryCode" => env("JENGA_API_COUNTRY_CODE"),
            "name" => "John Doe",
            "mobileNumber" => '0763123456',
            "walletName" => "Artel"
        ],
        "transfer" => [
            "type" => "MobileWallet",
            "amount" => "1000",
            "currencyCode" => "KES",
            "date" => "2018-08-18",
            "description" => "some remarks here"]
       ];

       $type = 'POST';

       return $this->serviceRequest($url, $body, $type);
    }

}
