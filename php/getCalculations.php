<?php
$data = [
    "company_code" => $_POST['company'],
    "contract_id" => $_POST['id'],
];

$ch = curl_init();//init Curl
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/calculations/',
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
]);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Token Test2019';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result=curl_exec($ch);
$res = json_decode($result, 1);
curl_close($ch);

if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
echo $result;