<?php
//Get all models by mark
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

if($_POST['action'] == getMarks){
echo json_encode(getAllMarks(500));
}elseif($_POST['action'] == getModels){
echo json_encode(getAllModelByID($_POST['id']));
}
