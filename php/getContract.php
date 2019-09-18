<?php
//Данные Страхователя (Лицца предоставлющего страховку)
$insurer = [
    "personal_info" => [
        "last_name" => "Дедков",
        "first_name" => "Петр",
        "middle_name"=> "Петрович",
        "gender" => "M",
        "birth_date" => "1980-09-05",
        "birth_place" => "Москва",
    ],
    "address" => [
        "full_address" => "Московская область, Воскресенск, ул. Конная, 25",
        "region" => "Московская область",
        "area" => "Воскресенский Район",
        "city" => "Воскресенск",
        "settlement" => "",
        "street" => "Конная",
        "house" => 22,
        "flat" => 10,
        "postal_code" => "	140200",
        "region_kladr" => "5000400000000",
        "city_kladr" => "5000400100000",
        "street_kladr" => "50004001000021200",
        "okato" => "46206501000",
    ],
    "document" => [
        "type_code" => "RUSSIAN_PASSPORT",
        "serial" => "3212",
        "number" => "345632",
        "issue_date" => "1994-09-05",
        "issued_by" => "string",
    ],
    "contacts" => [
        "phone" => "+79900667777",
        "email" => "string@asdfs.com",
    ],
];
$agent = [
    "phone" => "+79900667777",
    "email" => "string@asdfs.com",
];

$data = [
    "insurer" => $insurer,
    "owner" => [
        "personal_info"  => [
            "last_name"  => $_POST['owner_last_name'],
            "first_name" => $_POST['owner_first_name'],
            "middle_name"=> $_POST['owner_middle_name'],
            "birth_date" => $_POST['owner_birth_date'],
        ],
        "address" => [
            "full_address" => "Московская область, Воскресенск, ул. Конная, 22",
            "region" => "Московская область",
            "area" => "Воскресенский Район",
            "city" => "Воскресенск",
            "settlement" => "",
            "street" => "Конная",
            "house" => 22,
            "flat" => 10,
            "postal_code" => "	140200",
            "region_kladr" => "5000400000000",
            "city_kladr" => "5000400100000",
            "street_kladr" => "50004001000021200",
            "okato" => "46206501000",
        ],
        "document" => [
            "type_code" => "RUSSIAN_PASSPORT",
            "serial" =>  $_POST['owner_serial'],
            "number" =>  $_POST['owner_number'],
            "issue_date" =>  $_POST['owner_issue_date'],
            "issued_by" =>  $_POST['owner_issued_by'],
        ],
        "contacts" => [
            "phone" =>  $_POST['owner_phone'],
            "email" =>  $_POST['owner_email'],
        ],
    ],
    "vehicle" => [
        "document" => [
            "type_code" => "PTS",
            "serial" => $_POST['vehicle_serial'],
            "number" => $_POST['vehicle_number'],
            "issue_date" =>  $_POST['vehicle_issue_date'],
        ],
        "vehicle_id" => [
            "type_code" => "VIN",
            "number" =>  $_POST['vehicle_id_number'],
        ],
        "engine" => [
            "power" =>  $_POST['vehicle_power'],
        ],
        "mark_name" =>  $_POST['vehicle_mark_name'],
        "model_name" => $_POST['vehicle_model_name'],
        "manufacture_year" =>  $_POST['vehicle_manufacture_year'],
        "purpose" => "PERSONAL",
        "category" => $_POST['vehicle_category'],
        "diagnostic_card" => [
            "number" => $_POST['diagnostic_card_number'],
            "expiration_date" => $_POST['diagnostic_card_expiration_date'],
        ],
    ],
    "drivers" => [
       [
           "last_name"  => $_POST['drivers_last_name'],
           "first_name" => $_POST['drivers_first_name'],
           "middle_name"=> $_POST['drivers_middle_name'],
           "birth_date" => $_POST['drivers_birth_date'],
           "experience_start_date" => $_POST['drivers_experience_start_date'],
           "license" => [
               "type_code" => "RUSSIAN_DRIVER_LICENSE",
               "serial" =>  $_POST['drivers_serial'],
               "number" =>  $_POST['drivers_number'],
               "issue_date" => $_POST['drivers_issue_date'],
           ],
       ],
    ],
    "policy_action" => [
        "action_start_date" => $_POST['action_start_date'],
        "insurance_period" =>  $_POST['insurance_period'],
    ],
    "agent_contacts" => $agent,
];//build query

//echo json_encode($data);

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
echo $res;
?>