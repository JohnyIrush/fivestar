<?php

namespace Softwarescares\Inteligoogle\app\Services;

use Google\Client;

use Google\Service\Books;

use Google\Service\Forms\Form;
//use Google\Service\Forms\Resource\Forms as FormResource;
use Google\Service\Forms;


class GoogleFormService
{
    public $client;

    public $form;
    public $book;
    public $formResource;
    public $formService;

    public function __construct()
    {
        $this->client = new Client();

        $this->client->setApplicationName("Inteli System");
        //$this->client->setDeveloperKey(env("GOOGLE_APP_KEY"));

        $this->client->setClientId(env("GOOGLE_CLIENT_ID"));
        $this->client->setClientSecret(env("GOOGLE_CLIENT_SECRET"));

        $this->form = new Form();
        //$this->formResource = null; 
        $this->formService = new Forms($this->client); 

        $this->book = new Books($this->client);
    }

	public function get(string $formid)
	 {
        //return $this->form->get($formid);
	 } 

     public function create(string $name)
     {
        //$forms = $this->form->create($name);
        ///$this->form->info->title = $name;

        #return ($this->formService->forms);
        $this->form->setFormId("formid1");
        //$this->formResource = new FormResource($this->form);
        //return ($this->formService);

        $optParams = array('filter' => 'free-ebooks');
        $results = $this->book->volumes->listVolumes('Henry David Thoreau', $optParams);

        //return ($this->book);
        return ($this->formService->forms->create($this->form));
     }


}