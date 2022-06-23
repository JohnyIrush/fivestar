<?php
//-- Pesapal api configuration credentials

return array(
    'MPESA' => array(
        "ENV" => env("PESAPAL_ENV"),
        "CONSUMER_KEY" => env("PESAPAL_CONSUMER_KEY"),
        "CONSUMER_SECRET" => env("PESAPAL_CONSUMER_SECRET"),
        "SIGNTURE_METHOD" => "PESAPAL_",
        "IFRAMLINK" => "PESAPAL_IFRAMLINK"
    ),
);

