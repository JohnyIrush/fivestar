<?

namespace Softwarescares\Intelijenga\app\Services;

use Softwarescares\Intelijenga\app\Extensions\Transaction;

class AccountMiniStatemntService extends Transaction
{

    public function transaction($accountNumber)
    {
       $url = env("JENGA_API_ENV") == "production" ? "" : "https://uat.finserve.africa/v3-apis/account-api/v3.0/accounts/fullstatement/".env("JENGA_API_COUNTRY_CODE")."/".$accountNumber;
       $body = [];
       $type = 'GET';

       $curl = curl_init();

       return $this->serviceRequest($url, $body, $type);
    }

}
