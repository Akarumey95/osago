<?php require_once "../database/config.php";
/*$allCities = [];
$regions = $db->query("SELECT * FROM `regions`")->fetchAll();
//var_dump($res);
//$url = "https://calcus.ru/index.php?module=osago&action=getCities&id=5";

foreach ($regions as $region){

    $reg = $region['id'];
    $url = "https://calcus.ru/index.php?module=osago&action=getCities&id=" . $reg;
    $res = file_get_contents($url);
    $arr = json_decode($res, 1);

    foreach ($arr as $item){
        $city = $item['name'];
        $result = $db->query("INSERT INTO `сities`(`region_id`, `city`) VALUES ('$reg', '$city')");
        $allCities[$reg][] = $city;
    }
}


echo "<pre>";
var_dump($allCities);
echo "<pre>";*/

?>