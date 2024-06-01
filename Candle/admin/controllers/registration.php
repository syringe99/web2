<?php
session_start();
include '../../function/connect.php';
//проверка уникальности логина
$data = $connect->query(sprintf("SELECT `login` FROM `user` WHERE `login` = '%s'",
$_POST['login']));
if($data->num_rows){
	header("Location: /register/index.php?message=Пользователь с таким логином уже существует");
	exit;
	} else {
	//запись в базу данных о регистрации
	$sql = sprintf("INSERT INTO `user`(`id_user`, `id_role`, `login`, `password`,
	`full_name`, `phone`) VALUES
	(NULL,'1','%s','%s','%s','%s')",
	$_POST['login'],
	$_POST['password'],
	$_POST['full_name'],
	$_POST['phone'],
	);
	if(!$connect -> query($sql)){
	echo "Ошибка добавления данных";
	}
	// $_SESSION['login'] = $_POST['login'];
	// $_SESSION['id_role'] = "1";
	header("Location: /register/index.php?message=Успешная регистрация!");
	}
	?>