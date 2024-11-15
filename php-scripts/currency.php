<?php
$accessToken = 'ACCESS_TOKEN';
$currencies = 'EUR/USD+USD/JPY';
// Include the token as a query parameter
$url = "https://currencydatafeed.com/api/data.php?currency={$currencies}&token={$accessToken}";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// No need to set Authorization headers as the token is passed in the URL
$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
} else {
    // Print the raw JSON response
    header('Content-Type: application/json'); // Set the content type to JSON
    echo $response;
}

curl_close($ch);
