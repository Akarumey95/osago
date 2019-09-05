<?php
$host = "localhost";
$dbname = "osago";
$user = "root";
$pass = "akarumey";
try {
    $db = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass);
    $db->exec("set names utf8");
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>