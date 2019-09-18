<?php

//$data = http_build_query([
//    "company_code" => $_POST['company'],
//    "contract_id" => $_POST['id'],
//
//]);

function dd($var){
    echo '<pre>';
        print_r($var);
    echo '</pre>';
}
$API = 'https://apistaging.el-market.org/v1/osago/calculations/';

$ch = curl_init();

$Tdata = [
    "company_code" => 'avolga',
    "contract_id" => 5652,
];

curl_setopt($ch, CURLOPT_URL, 'https://apistaging.el-market.org/v1/osago/calculations/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($Tdata));
curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Authorization: Token Test2019';
$headers[] = 'Content-Type: application/json';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
dd($result);

curl_close($ch);
