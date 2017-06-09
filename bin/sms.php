<?php
include realpath(__DIR__."/../vendor/autoload.php");

use Formaldehid\SmsBump\Client;

if(count($argv) < 4){
    echo "Usage:\n";
    echo "php sms.php API_KEY MOBILE_NUMBER TEXT\n";
}

$apiKey = $argv[1];
$number = $argv[2];
$text = $argv[3];

$api = new Client($apiKey);
$api->send_1([
    'APIKey' => $apiKey,
    'to' => $number,
    'message' => $text
]);