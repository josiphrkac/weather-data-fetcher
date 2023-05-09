<?php
require "config.php";

$apiKey = $config['api-key'];

$city = $_GET['city'];

$api_endpoint = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$apiKey";

$curl = curl_init();

$curl_options = array(
    CURLOPT_URL => $api_endpoint,
    CURLOPT_RETURNTRANSFER => true
);
curl_setopt_array($curl, $curl_options);

$response = curl_exec($curl);

curl_close($curl);

$data = json_decode($response, true);
/* echo '<pre>';
print_r($data); */

if ($data['cod'] === 200) {
    $weatherData = array(
        'date' => date('Y-m-d H:i:s', $data['dt']),
        'temp' => round($data['main']['temp'] - 273.15),
        'description' => $data['weather']['0']['description']
    );
    $json_result = json_encode($weatherData);
    echo $json_result;
} else {
    http_response_code(404);
    $error = array(
        'error' => 'An error occurred while fetching data.
         Check the name of the city.'
    );
    $json_error = json_encode($error);
    echo $json_error;
}
