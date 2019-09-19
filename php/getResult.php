<?php
$ch = curl_init();//init Curl
curl_setopt_array($ch, [
CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/calculations/' . $_POST['id'] . '/',
]);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Token Test2019';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result=curl_exec($ch);
curl_close($ch);

if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}