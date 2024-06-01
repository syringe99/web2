<?php
session_start();
include '../../function/connect.php';
$name = $_POST['num3name'];
$url = $_POST['num3url'];
$id = $_POST['num3id'];
$sql = sprintf("UPDATE `Product` SET `name` = '$name', `url` = '$url' WHERE `id`= $id"
	);
	if(!$connect -> query($sql)){
		echo "Ошибка удаления данных";
		}
	header("Location: /profile/index.php?message=Успешно!");
	?>