<?php

//Данные Страхователя (Лицца предоставлющего страховку)
$insurer = [
    "personal_info" => [
        "last_name" => "Дедков",
        "first_name" => "Петр",
        "birth_date" => "1980-09-05",
    ],
    "address" => [
        "full_address" => "Москва ул. Янтарная 22",
    ],
    "document" => [
        "type_code" => "RUSSIAN_PASSPORT",
        "serial" => "5432",
        "number" => "345632",
        "issue_date" => "1994-09-05",
        "issued_by" => "string",
    ],
];
$data = [
    "insurer" => $insurer,
    "owner" => [
        "personal_info" => [
            "last_name" => "Адамов",
            "first_name" => "Дмитрий",
            "birth_date" => "1994-09-05",
        ],
        "address" => [
            "full_address" => "Москва ул. Янтарная 22",
        ],
        "document" => [
            "type_code" => "RUSSIAN_PASSPORT",
            "serial" => "5432",
            "number" => "345632",
            "issue_date" => "1994-09-05",
            "issued_by" => "string",
        ],
        "contacts" => [
            "phone" => "+7990066777",
            "email" => "string@asdfs.com",
        ],
    ],
    "vehicle" => [
        "document" => [
            "type_code" => "PTS",
            "serial" => "ВА23",
            "number" => "123456",
            "issue_date" => "1997-09-05",
        ],
        "vehicle_id" => [
            "type_code" => "VIN",
            "number" => "12345678910",
        ],
        "engine" => [
            "power" => "300",
        ],
        "mark_name" => "AVIA",
        "model_name" => "A21",
        "manufacture_year" => 2010,

        "purpose" => "PERSONAL",
        "category" => "A",
        "diagnostic_card" => [
            "number" => "123456789012",
            "expiration_date" => "2020-09-05",
        ],
    ],
    "drivers" => [
       [
           "last_name" => "Пупкин",
           "first_name" => "Вася",
           "birth_date" => "1985-09-05",
           "experience_start_date" => "2016-09-05",
           "license" => [
               "type_code" => "RUSSIAN_DRIVER_LICENSE",
               "serial" => "5846",
               "number" => "123452",
               "issue_date" => "2018-08-05",
           ],
       ],
    ],
    "policy_action" => [
        "action_start_date" => "2019-09-20",
        "insurance_period" => 10,
    ],
    "agent_contacts" => [
        "phone" => "+7990066777",
        "email" => "string@asdfs.com",
    ],
];//build query
$ch = curl_init();//init Curl
curl_setopt_array($ch, [
    CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/contracts/',
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode($data),
]);

$headers = array();
$headers[] = 'Accept: application/json';
$headers[] = 'Content-Type: application/json';
$headers[] = 'Authorization: Token Test2019';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$res=curl_exec($ch);

curl_close($ch);
if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
echo "<pre>";
var_dump($res);
echo "</pre>";
?>