<?

namespace Softwarescares\Intelijenga\app\Services;

use Softwarescares\Intelijenga\app\Extensions\Transaction;

class AccountFullStatemntService extends Transaction
{
    use AuthorizationService;

    public function transaction($accountNumber)
    {
       $url = env("JENGA_API_ENV") == "production" ? "" : "https://uat.finserve.africa/v3-apis/account-api/v3.0/accounts/ministatement/";

       $body = [
        "countryCode" => env("JENGA_API_COUNTRY_CODE"),
        "accountNumber" => $accountNumber,
        "fromDate" => "2018-01-18",
        "toDate" => "2018-04-19",
        "limit" => 3
       ];

       $type = 'POST';

       return $this->serviceRequest($url, $body, $type);
    }

}
