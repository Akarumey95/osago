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
            "last_name"  => /*$_POST['owner_last_name']*/ "Адамов",
            "first_name" => /*$_POST['owner_first_name']*/ "Дмитрий",
            "middle_name"=> /*$_POST['owner_middle_name']*/ "Петрович",
            "birth_date" => /*$_POST['owner_birth_date']*/ "1974-09-05",
        ],
        "address" => [
            "full_address" => /*$_POST['owner_full_address']*/ "Омск ул. Янтарная 22",
        ],
        "document" => [
            "type_code" => "RUSSIAN_PASSPORT",
            "serial" =>  /*$_POST['owner_serial']*/ "4332",
            "number" =>  /*$_POST['owner_number']*/ "348841",
            "issue_date" =>  /*$_POST['owner_issue_date']*/ "1994-09-05",
            "issued_by" =>  /*$_POST['owner_issued_by']*/ "string",
        ],
        "contacts" => [
            "phone" =>  /*$_POST['owner_phone']*/ "+7990066777",
            "email" =>  /*$_POST['owner_email']*/ "string@asdfs.com",
        ],
    ],
    "vehicle" => [
        "document" => [
            "type_code" => "PTS",
            "serial" => /*$_POST['vehicle_serial']*/ "58ТС",
            "number" => /*$_POST['vehicle_number']*/ "123456",
            "issue_date" =>  /*$_POST['vehicle_issue_date']*/ "2011-09-05",
        ],
        "vehicle_id" => [
            "type_code" => "VIN",
            "number" =>  /*$_POST['vehicle_id_number']*/ "12345678910",
        ],
        "engine" => [
            "power" =>  /*$_POST['vehicle_power']*/ "300",
        ],
        "mark_name" =>  /*$_POST['vehicle_mark_name']*/ "AUDI",
        "model_name" => /*$_POST['vehicle_model_name']*/  "A3",
        "manufacture_year" =>  /*$_POST['vehicle_manufacture_year']*/ 2010,

        "purpose" => "PERSONAL",
        "category" => "B",
        "diagnostic_card" => [
            "number" => /*$_POST['diagnostic_card_number']*/ "123456789012",
            "expiration_date" => /*$_POST['diagnostic_card_expiration_date']*/ "2020-09-05",
        ],
    ],
    "drivers" => [
       [
           "last_name"  => /*$_POST['drivers_last_name']*/"Пупкин",
           "first_name" => /*$_POST['drivers_first_name']*/ "Вася",
           "middle_name"=> /*$_POST['drivers_middle_name']*/ "Петрович",
           "birth_date" => /*$_POST['drivers_birth_date']*/ "1985-09-05",
           "experience_start_date" => /*$_POST['drivers_experience_start_date']*/ "2016-09-05",
           "license" => [
               "type_code" => "RUSSIAN_DRIVER_LICENSE",
               "serial" =>  /*$_POST['drivers_serial']*/"5846",
               "number" =>  /*$_POST['drivers_number']*/ "123452",
               "issue_date" => /*$_POST['drivers_issue_date']*/ "2018-08-05",
           ],
       ],
    ],
    "policy_action" => [
        "action_start_date" => /*$_POST['action_start_date']*/ "2019-09-20",
        "insurance_period" =>  /*$_POST['insurance_period']*/  12,
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