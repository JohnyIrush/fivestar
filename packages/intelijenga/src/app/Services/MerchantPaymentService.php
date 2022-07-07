<?

namespace Softwarescares\Intelijenga\app\Services;

use Softwarescares\Intelijenga\app\Extensions\Transaction;

class MerchantPaymentService extends Transaction
{

    public function transaction($accountNumber, $amount)
    {
       $url = env("JENGA_API_ENV") == "production" ? "" : "https://uat.finserve.africa/v3-apis/transaction-api/v3.0/tills/pay";

       $body = [
        "merchant" =>
        ["till" => "0766000000"],
        "payment" =>
        ["ref" => "123456789123","amount" => "1000.00","currency" => "KES"],
        "partner" =>
        ["id" => "0011547896523","ref" => "987654321"]
        ];

       $type = 'POST';

       return $this->serviceRequest($url, $body, $type);
    }

}
