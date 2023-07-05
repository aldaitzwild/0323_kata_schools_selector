<?php
/**
 * Contact this URL => https://wizard-world-api.herokuapp.com/Houses
 * (doc : https://wizard-world-api.herokuapp.com/swagger/index.html)
 * and show each house you get with their name one line.
 * To get all that, please use HttpClient (doc : https://symfony.com/doc/current/http_client.html)
 * You already have it in your dependancies, so don't forget to do a
 * composer install
 */

use Symfony\Component\HttpClient\HttpClient;

 // Don't touch that, you need it
require_once('vendor/autoload.php');

$client = HttpClient::create();
$response = $client->request(
    'GET',
    'https://wizard-world-api.herokuapp.com/Houses'
);

$houses = $response->toArray();

foreach($houses as $house) {
    echo $house['name'] . PHP_EOL;
}