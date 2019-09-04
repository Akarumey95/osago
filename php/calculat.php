<?php
/*$api = "https://apistaging.el-market.org/v1/osago";
$queryData = [
    'key' => '22234',                                                   //Ключ агента
    'dateStart' => '2018-04-27',                                        //Дата начала действия договора
    'period' => '12',                                                   //Период страхования в месяцах
    'purpose' => 'Личная',                                              //Цель использования
    'limitDrivers' => '0',                                              //1 или 0, список водителей ограничен
    'trailer' => '0',                                                   //1 или 0, страхование с прицепом
    'isJuridical' => '0',                                               //1 или 0, собственник - юридическое лицо
    'codeKladr' => '7600000000000',                                     //Код КЛАДР региона оформления
    'codeOkato' => '45000000000',                                       //Код ОКАТО региона оформления
    'cityKladr' => '5000002900000',
    'owner[name]' => 'Петр',                                            //Если isJuridical = 0, имя собственника
    'owner[lastname]' => 'Терехов',                                     //Если isJuridical = 0, фамилия собственника
    'owner[middlename]' => 'Владимирович',                              //Если isJuridical = 0, отчество собственника
    'owner[birthday]' => '1985-01-20',                                  //Если isJuridical = 0,дата рождения собственника
    'owner[document][type]' => 'RussianPassport',                       /*Свидетельство о рождении BirthCertificate
                                                                        Дипломатический паспорт гражданина РФ DiplomaticPassport
                                                                        Водительское удостоверение DriverLicense
                                                                        Иностранное водительское удостоверение ForeignDriverLicense
                                                                        Иностранный паспорт ForeignPassport
                                                                        Удостоверение личности офицера IdentityCardOfficer
                                                                        Военный билет MilitaryID
                                                                        Военный билет офицера запаса MilitaryIDReserveOfficer
                                                                        Паспорт Минморфлота MinmorflotPassport
                                                                        Загранпаспорт гражданина РФ RussianInternationalPassport
                                                                        Паспорт гражданина РФ RussianPassport
                                                                        Паспорт моряка SeamanPassport
                                                                        Загранпаспорт гражданина СССР USSRInternationalPassport
                                                                        Паспорт гражданина СССР USSRPassport
                                                                        Вид на жительство ViewForLife
                                                                        Патент на работу WorkPatent*/
   /* 'owner[document][dateIssue]' => '2005-02-21',                     //Если isJuridical = 0, дата выдачи паспорта собственника
    'owner[document][issued]' => 'Алексинским РОВД Тульской области',   //Если isJuridical = 0, кто выдал паспорт собственнику
    'owner[document][number]' => '670963',                              //Если isJuridical = 0, номер паспорта собственника
    'owner[document][series]' => '7004',                                //Если isJuridical = 0, серия паспорта собственника
    'owner[organization][name]' => 'ООО Ромашка',                       //Если isJuridical = 1, имя организации
    'owner[organization][inn]' => '12345678',                           //Если isJuridical = 1, ИНН организации
    'owner[organization][kpp]' => '87654321',                           //Если isJuridical = 1, КПП организации
    'owner[organization][ogrn]' => '123445677',                         //Если isJuridical = 1, ОГРН организации
    'car[make]' => 'Kia',                                               //Марка ТС
    'car[model]' => 'SPORTAGE',                                         //Модель ТС
    'car[category]' => 'B',                                             //Категория ТС (A, B, C, D, E)
    'car[power]' => '184',                                              //Лошадиные силы
    'car[documents][registrationNumber]' => 'Е500ЕО777',                //Регистрационный номер ТС
    'car[documents][chassisNumber]' => '',                              //Номер шасси
    'car[documents][carcaseNumber]' => '',                              //Номер кузова
    'car[documents][vin]' => 'XWEPC813DE0007098',                       //VIN
    'usagePeriod[0][dateStart]' => '2018-03-20',                        //Дата начала периода использования договора. Обычно совпадает с датой начала договора.
    'usagePeriod[0][dateEnd]' => '2019-03-19',                          //Дата окончания периода использования договора. Обычно совпадает с датой окончания договора.
    'drivers[0][name]' => 'Валерий',                                    //Если limitDrivers = 1, имя водителя
    'drivers[0][lastname]' => 'Терехов',                                //Если limitDrivers = 1, фамилия водителя
    'drivers[0][middlename]' => 'Владимирович',                         //Если limitDrivers = 1, отчество водителя
    'drivers[0][birthday]' => '1985-01-20',                             //Если limitDrivers = 1, дата рождения водителя
    'drivers[0][license][dateBeginDrive]' => '2010-12-25',              //Если limitDrivers = 1, дата начала стажа водителя
    'drivers[0][license][dateIssue]' => '2010-12-25',                   //Если limitDrivers = 1, дата выдачи прав водителя
    'drivers[0][license][number]' => '037560',                          //Если limitDrivers = 1, номер прав водителя
    'drivers[0][license][series]' => '71РА',                            //Если limitDrivers = 1, серия прав водителя
];

$curl = curl_init();
curl_setopt_array($curl, [
    CURLOPT_URL => $api."/calculations/",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_HEADER => 0,
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => false,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => $queryData
]);

$headr = [];
$headr[] = 'accept: application/json';
$headr[] = 'Content-Type: application/json';
$headr[] = 'Authorization:' . 'Test2019';

curl_setopt($curl, CURLOPT_HTTPHEADER,$headr);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}*/

/*//Get all models by mark
function getAllModelByID($id){
    $data = http_build_query([
        'mark_id' => $id,
    ]);//build query
    $ch = curl_init();//init Curl
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/lists/models/?' . $data,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
            'Authorization: Test2019',
        ],
    ]);
    $res=json_decode(curl_exec($ch),true);
    curl_close($ch);
    if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
    return $res['results'];
}

//Get all marks of auto
function getAllMarks($limit){
    $data = http_build_query([
            'limit' => $limit,
        ]);//build query
    $ch = curl_init();//init Curl
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/lists/marks/?' . $data,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
            'Authorization: Test2019'
        ]
    ]);
    $res=json_decode(curl_exec($ch),true);
    curl_close($ch);
    if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
    return $res['results'];
}

$id = getAllMarks(500)['82']['id'];
$res = getAllModelByID($id);

echo "<pre>";
var_dump($res);
echo "</pre>";*/


/*    $data = [
        'calculate'     => 1,
        'owner_type'    => 1, //1 или 0, собственник - юридическое лицо
        'ts_type'       => 2, //Категория ТС (A, B, C, D, E)
        'pr'            => 0, //1 или 0, страхование с прицепом
        'region'        => 1, //Регион
        'power'         => 3, //Лошадиные силы
        'period'        => 8, //Период использования //Период страхования в месяцах
        'drivers_limit' => 1, //1 или 0, список водителей ограничен
        'drivers_age'   => [

        ],
        'drivers_stag'  => [

        ],                    //Стаж
        'class'         => 5, //КБМ
    ];//build query*/

    $data = [
        /*'data' => [
            'isJuridical'   => 1, //1 или 0, собственник - юридическое лицо                 ++
            'car[category]' => "A", //Категория ТС (A, B, C, D, E)                          ++
            'trailer'       => 0, //1 или 0, страхование с прицепом                         ++
            'car[power]'    => 3, //Лошадиные силы                                          ++
            'period'        => 12, //Период использования //Период страхования в месяцах    ++
            'limitDrivers' => 1, //1 или 0, список водителей ограничен                      ++
        ]*/
       'data' => [
           'company_code' => '94351234',
            'contract_id' => '0021421',
       ],
    ];//build query
    $ch = curl_init();//init Curl
    curl_setopt_array($ch, [
        CURLOPT_URL => 'https://apistaging.el-market.org/v1/osago/calculations/',
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_HTTPHEADER => [
            'Accept: application/json',
            'Authorization: Test2019'
        ],
        CURLOPT_POSTFIELDS => json_encode($data),
    ]);
    $res=json_decode(curl_exec($ch),true);
    curl_close($ch);
    if (curl_errno($ch)) { echo 'Error:' . curl_error($ch);}
echo "<pre>";
var_dump($res);
echo "</pre>";

