<?php

namespace Softwarescares\Inteligoogle\app\Services;

use Google\Client;
use Google\Service\Sheets;
use Google\Service\Sheets\ValueRange;

use Google\Service\Drive;
use Google\Service\Sheets\SpreadSheet;

class GoogleSheetService
{
	public function getClient()
	 {
	 	$client = new Client();
	 	//$client->setApplicationName("Google Sheets Demo");

	 	//$client->setRedirectUri("http://127.0.0.1:8000/google/sheet/index");

	 	//$client->setScopes(Sheets::SPREADSHEETS);
	 	//$client->setAuthConfig("inteli-googlesheet-config.json");
	 	//$client->setAccessType("offline");

	 	return $client;

	 } 
}