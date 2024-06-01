<?php
session_start();
include '../../function/connect.php';
$sql = sprintf("INSERT INTO `Product`(`id`, `name`, `price`, `url`) VALUES
	(NULL,'%s','%s','%s')",
	$_POST['num1name'],
	$_POST['num1price'],
	$_POST['num1url'],
	);
	if(!$connect -> query($sql)){
		echo "Ошибка добавления данных";
		}
	header("Location: /profile/index.php?message=Успешно!");
	?>