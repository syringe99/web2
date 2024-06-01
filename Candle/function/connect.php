<?php
// $host = "localhost";
// $username = "asd";
// $password = "asdasd";
// $database = "db_demo_2024";
// $connect = new mysqli($host, $username, $password, $database);
$connect = new mysqli("MySQL-8.0", "root", "root", "db_Candle_2024");
if($connect->connect_error){
die ("Ошибка подключения к базе данных");
}
?>