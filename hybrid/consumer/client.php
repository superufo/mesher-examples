<?php

$name = getenv("TARGET");
$url = "http://" . $name . "/hello";

$client = curl_init($url);
curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($client);

$result = json_decode($response);

echo $result->data;

?>
