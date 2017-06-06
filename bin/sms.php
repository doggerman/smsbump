<?php
include realpath(__DIR__."/../src/Api.php");

if(count($argv) < 4){
    echo "Usage:\n";
    echo "php sms.php API_KEY MOBILE_NUMBER TEXT\n";
}

$apiKey = $argv[1];
$number = $argv[2];
$text = $argv[3];

\Formaldehid\SmsBump\Api::sendMessage(array(
    'APIKey' => $apiKey,
    'to' => $number,
    'message' => $text
));