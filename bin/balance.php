<?php
include realpath(__DIR__."/../vendor/autoload.php");

use Formaldehid\SmsBump\Client;

if(count($argv) < 4){
    echo "Usage:\n";
    echo "php balance.php API_KEY\n";
}

$apiKey = $argv[1];

$api = new Client($apiKey);
$balance = $api->getBalance();
if($balance){
    echo "Balance: ".$balance->balance." ".strtoupper($balance->currency)."\n";
} else{
    echo "Service unavailable!\n";
}

