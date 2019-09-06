<?php

//Данные Страхователя (Лицца предоставлющего страховку)
$insurer = [
    "personal_info" => [
        "last_name" => "string",
        "first_name" => "string",
        "birth_date" => "2019-09-05",
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

/*$data = [
    "insurer" => [
        "personal_info" => [
            "last_name" => "string",
            "first_name" => "string",
            "middle_name" => "string",
            "gender" => "M",
            "birth_date" => "2019-09-05",
            "birth_place" => "string",
        ],
        "address" => [
            "full_address" => "string",
            "region" => "string",
            "area" => "string",
            "city" => "string",
            "settlement" => "string",
            "street" => "string",
            "house" => "string",
            "flat" => "string",
            "postal_code" => "string",
            "region_kladr" => "string",
            "city_kladr" => "string",
            "street_kladr" => "string",
            "okato" => "string",
        ],
        "document" => [
            "type_code" => "RUSSIAN_PASSPORT",
            "serial" => "string",
            "number" => "string",
            "issue_date" => "2019-09-05",
            "issued_by" => "string",
        ],
        "contacts" => [
            "phone" => "string",
            "email" => "string",
        ],
    ],
    "owner" => [
        "personal_info" => [
            "last_name" => "string",
            "first_name" => "string",
            "middle_name" => "string",
            "gender" => "M",
            "birth_date" => "2019-09-05",
            "birth_place" => "string",
        ],
        "juridical_info" => [
            "inn" => "string",
            "kpp" => "string",
        ],
        "address" => [
            "full_address" => "string",
            "region" => "string",
            "area" => "string",
            "city" => "string",
            "settlement" => "string",
            "street" => "string",
            "house" => "string",
            "flat" => "string",
            "postal_code" => "string",
            "region_kladr" => "string",
            "city_kladr" => "string",
            "street_kladr" => "string",
            "okato" => "string",
        ],
        "document" => [
            "type_code" => "RUSSIAN_DRIVER_LICENSE",
            "serial" => "string",
            "number" => "string",
            "issue_date" => "2019-09-05",
            "issued_by" => "string",
        ],
        "contacts" => [
            "phone" => "string",
            "email" => "string"
        ],
    ],
    "vehicle" => [
        "document" => [
            "type_code" => "PTS",
            "serial" => "string",
            "number" => "string",
            "issue_date" => "2019-09-05",
        ],
        "vehicle_id" => [
            "type_code" => "VIN",
            "number" => "string",
        ],
        "engine" => [
            "power" => "string",
            "volume" => "string",
            "type" => "string",
        ],
        "mark_name" => "BUGATTI",
        "model_name" => "VEYRON",
        "rsa_model_code" => "string",
        "manufacture_year" => 0,
        "with_trailer" => false,
        "purpose" => "PERSONAL",
        "category" => "A",
        "diagnostic_card" => [
            "number" => "string",
            "expiration_date" => "2019-09-05",
        ],
        "license_plate" => "string",
        "allowed_mass" => "string",
        "empty_mass" => "string",
    ],
    "drivers" => [
        "last_name" => "string",
        "first_name" => "string",
        "middle_name" => "string",
        "gender" => "M",
        "birth_date" => "2019-09-05",
        "birth_place" => "string",
        "experience_start_date" => "2019-09-05",
        "license" => [
            "type_code" => "string",
            "serial" => "string",
            "number" => "string",
            "issue_date" => "2019-09-05",
            "issued_by" => "string"
        ],
    ],
    "policy_action" => [
        "action_start_date" => "2019-09-05",
        "insurance_period" => 0,
    ],
    "agent_contacts" => [
        "phone" => "string",
        "email" => "string"
    ],
];//build query*/
$data = [
    "insurer" => $insurer,
    "owner" => [
        "personal_info" => [
            "last_name" => "string",
            "first_name" => "string",
            "birth_date" => "2019-09-05",
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
        "manufacture_year" => 2010,

        "purpose" => "PERSONAL",
        "category" => "A",
    ],
    "drivers" => [
        "last_name" => "string",
        "first_name" => "string",
        "birth_date" => "2019-09-05",
        "experience_start_date" => "2016-09-05",
        "license" => [
            "type_code" => "RUSSIAN_DRIVER_LICENSE",
            "serial" => "ВА23",
            "number" => "123456",
            "issue_date" => "2016-08-05",
        ],
    ],
    "policy_action" => [
        "action_start_date" => "2018-09-05",
        "insurance_period" => 10,
    ],
    "agent_contacts" => [
        "phone" => "+7990066777",
        "email" => "string@asdfs.com",
    ],
];//build query
/*echo "<pre>";
var_dump($data);
echo "</pre>";*/

/*$data = [
    "owner" => [
        "address" => [
            "full_address" => "Moskov, Moskov",     //3-8
            "region" => "Moskov",           //3-8
            "city" => "Moskov",             //3-8
        ],
    ],
    "vehicle" => [
        "vehicle_id" => [
            "type_code" => "VIN",           //1-1
            "number" => "2132151251",           //1-1
        ],
        "mark_name" => "2141",            //1-2
        "model_name" => "92113",           //1-3
        "manufacture_year" => 2001,            //1-4
    ],
    "drivers" => [
        "last_name" => "Pukin",            //3-1
        "first_name" => "Vasya",           //3-2
        "middle_name" => "Olegovich",          //3-3
        "birth_date" => "2000-05-05",       //3-4
        "experience_start_date" => "2019-05-05",//3-5
        "license" => [
            "serial" => "AL",           //3-6
            "number" => "8542334",           //3-7
        ],
    ],
    "policy_action" => [
        "action_start_date" => "2019-19-10",//2-1
    ],
];//build query*/


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
$headers[] = 'Authorization: Test2019';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$res=json_decode(curl_exec($ch),true);
curl_close($ch);
if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
echo "<pre>";
var_dump($res);
echo "</pre>";

?>