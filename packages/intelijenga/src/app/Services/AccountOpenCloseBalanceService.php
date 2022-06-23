<?

namespace Softwarescares\Intelijenga\app\Services;

use Carbon\Carbon;
use Softwarescares\Intelijenga\app\Extensions\Transaction;

class AccountOpenCloseBalanceService extends Transaction
{
    use AuthorizationService;

    public function transaction($accountNumber)
    {
       $url = env("JENGA_API_ENV") == "production" ? "" : "https://uat.finserve.africa/v3-apis/account-api/v3.0/accounts/accountbalance/query";
       $body = [
                "countryCode" => env("JENGA_API_COUNTRY_CODE"),
                "accountId" => "0011547896523",
                "date" => "2018-08-18"
               ];
       $type = 'POST';

       return $this->serviceRequest($url, $body, $type);
    }

}
