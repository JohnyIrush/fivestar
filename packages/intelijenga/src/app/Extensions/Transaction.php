<?php

namespace Softwarescares\Intelijenga\app\Extensions;
use Softwarescares\Intelijenga\app\Services\AuthorizationService;

class Transaction
{
    use AuthorizationService;
    /*** make all the http request ***/
    public function serviceRequest($url, $body, $type)
    {
        $client = new \GuzzleHttp\Client();

        $response = $client->request($type, 'https://uat.finserve.africa/v3-apis/account-api/v3.0/accounts/ministatement/KE/0011547896523', [
          'body' => $body,
          'headers' => [
            'Authorization' => 'Bearer ' . $this->generateTokenBearer(),
            'signature' => $this->generateSignature(),
          ],
        ]);

        return $response->getBody();
    }
}
