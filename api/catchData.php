<?php
require "config.php";

$apiKey = $config['api-key'];

$city = $_GET['city'];

$api_endpoint = "https://api.openweathermap.org/data/2.5/weather?q=london&appid=$apiKey";

$curl = curl_init();

$curl_options = array(
    CURLOPT_URL => $api_endpoint,
    CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($curl, $curl_options);

$response = curl_exec($curl);

curl_close($curl);

$data = json_decode($response, true);
echo '<pre>';
print_r($data);
