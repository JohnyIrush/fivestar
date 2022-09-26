<?php

namespace Softwarescares\Inteligoogle\app\Services;

use Google\Client;
use Google\Service\Books;

class GoogleFormService
{
	public function getClient()
	 {
	 	$client = new Client();

        $client->setApplicationName("Inteli System");
        $client->setDeveloperKey(env("GOOGLE_APP_KEY"));

        $service = new Books($client);

        //$optParams = array('filter' => 'free-ebooks');
        //$results = $service->volumes->listVolumes('Henry David Thoreau', $optParams);

        return response()->json($service);
	 } 
}