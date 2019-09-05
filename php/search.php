<?php require_once "../database/config.php";
$result = [];

if($_POST['action'] == "search"){
    $pattern = trim(strip_tags(stripcslashes(htmlspecialchars($_POST['pattern']))));
    $regions = $db->query("SELECT * FROM `regions` WHERE `region_name` LIKE '%" . $pattern . "%'")->fetchAll(PDO::FETCH_ASSOC);
    foreach ($regions as $region){
        $id = $region['id'];
        $city = $db->query("SELECT * FROM `сities` WHERE `region_id` = '$id'")->fetchAll(PDO::FETCH_ASSOC);

        foreach ($city as $k => $item){
            $city_arr[] = $item['city'];
        }

        $region['cities'] = $city_arr;
        $result[]=$region;
        $city_arr = [];
    }
    echo json_encode($result);
}
?>