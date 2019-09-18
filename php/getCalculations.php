<?php

/*$data = [
    "company_code" => "ingos",
    "contract_id" => 5719,

];*/

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
$res = json_decode($result);
$code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
var_dump(curl_error($ch));
curl_close($ch);

if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
elseif ($code == 500) {echo "Server not response";}
elseif ($code == 400) {echo json_decode($result, 1)['errors']['detail'];}
elseif ($code == 200 && $res["status"] == "DECLINED"){echo "Отказ";}
elseif ($code == 200 && $res["status"] == "CALCULATED"){echo $result;}
elseif ($code == 200 && $res["status"] == "PROCESSING"){echo getResult($res['id']);}

function getResult($id){

    $ch = curl_init();//init Curl
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/calculations/'.$id,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CUSTOMREQUEST => "GET",
    ]);

    $headers = array();
    $headers[] = 'Accept: application/json';
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Authorization: Token Test2019';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    $result=curl_exec($ch);
    $res = json_decode($result);
    $code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
    elseif ($code == 500) {echo "Server not response";}
    elseif ($code == 400) {echo json_decode($result, 1)['errors']['detail'];}
    elseif ($code == 200 && $res["status"] == "DECLINED"){echo "Отказ";}
    elseif ($code == 200 && $res["status"] == "CALCULATED"){return $result;}
    elseif ($code == 200 && $res["status"] == "PROCESSING"){echo getResult($res['id']);}
}