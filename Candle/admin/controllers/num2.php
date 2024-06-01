<?php
session_start();
include '../../function/connect.php';
$sql = sprintf("DELETE FROM `Product` WHERE `id` = '%s'",
	$_POST['num2id'],
	);
	if(!$connect -> query($sql)){
		echo "Ошибка удаления данных";
		}
	header("Location: /profile/index.php?message=Успешно!");
	?>