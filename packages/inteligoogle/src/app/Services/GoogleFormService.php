<?php

namespace Softwarescares\Inteligoogle\app\Services;

use Google\Client;

use Google\Service\Books;

use Google\Service\Forms\Form;
    //Google\Service\Forms\Form
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
        $this->client->setApplicationName("Google Sheets Demo");

        $this->client->setScopes(Forms::FORMS_BODY);
        //$this->client->setScopes(Forms::FORMS_RESPONSES_READONLY);
        //$this->client->setAuthConfig('inteli-googleform-config.json');
        $this->client->setAuthConfig("inteli-googlesheet-config.json");
        $this->client->setAccessType("offline");

        $this->formService = new Forms($this->client); 

        $this->form = new Form();
    }

	public function get(string $formid)
	 {
        //return $this->form->get($formid);
	 } 

     public function create(string $name)
     {
        //$this->form->title = $name;

       $form = [
           "info" => [
               "title" => $name,
           ],
       ];

       $this->form->append((object)$form);
        //return $this->formService->forms_responses->get("1447dI9djnw_SJadpaeJpGqmeI8-kCCbqlCGIgaboqlM","1FAIpQLSfm0qLhyo3L79jptsb6PMJCjmT5kt5nArLJL0w1q4vlHUvG3Q");

        //return $this->formService->forms->create($this->form);


        return $this->form;
     }


}