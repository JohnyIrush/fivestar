<?

namespace Softwarescares\Intelijenga\app\Services;

use Carbon\Carbon;

Trait AuthorizationService
{
    public function generateTokenBearer()
    {

       $url = env("JENGA_API_ENV") == "production" ? "" : "https://sandbox.jengahq.io/identity-test/v2/token";

       $curl = curl_init();
       curl_setopt_array($curl,
       [
           CURLOPT_URL => $url,
           CURLOPT_HTTPHEADER => array("Authorization: Basic ".base64_encode(env("JENGA_CONSUMER_KEY").":".env("JENGA_CONSUMER_SECRET"))),
           CURLOPT_HEADER =>false,
           CURLOPT_SSL_VERIFYPEER => false,
           CURLOPT_RETURNTRANSFER => true
       ]);

       return isset(json_decode(curl_exec($curl))->access_token) == true? json_decode(curl_exec($curl))->access_token : "";
    }

    public function generateSignature()
    {
        $plainText  = env("JENGA_API_MERCHANT_CODE") . Carbon::rawParse('now')->format('YmdHms');
        $privateKey = openssl_pkey_get_private(("file://path/to/privatekey.pem"));
        $token      = $this->generateTokenBearer();

        openssl_sign($plainText, $signature, $privateKey, OPENSSL_ALGO_SHA256);


        $url = env("JENGA_API_ENV") == "production" ? "" : "https://sandbox.jengahq.io/account-test/v2/accounts/accountbalance/query";

        $curl = curl_init();
        $body = [
            "countryCode" => "KE",
            "accountId" => "0011547896523",
            "date" => Carbon::rawParse('now')->format('YmdHms')
          ];


          curl_setopt_array($curl, array(
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $token,
                "cache-control: no-cache",
                "Content-Type: application/json",
                "signature: " . base64_encode($signature)
            )
        ));
        $result = curl_exec($curl);
        $err    = curl_error($curl);

        curl_close($curl);

        if ($err)
        {
            return $err;
        } else {
            return $result;
        }


    }
}
