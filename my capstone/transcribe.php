<?php

$apiKey = $_POST["2ab58e0fbd01bbb54b0a778c513059cc67fb13fe"];

$audioFile = $_FILES["audio"]["tmp_name"];

$audioData = file_get_contents($audioFile);

$url = "https://api.deepgram.com/v1/listen?punctuate=true&diarize=true";

$ch = curl_init($url);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $audioData);

curl_setopt($ch, CURLOPT_HTTPHEADER, [
"Authorization: Token $apiKey",
"Content-Type: audio/webm"
]);

$response = curl_exec($ch);

curl_close($ch);

echo $response;

?>