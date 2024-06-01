<?php
include "connect.php";



function fnGet() {
	global $connect;
	$i = 0;
	$data = '<div class="card man-color qq">';
	$sql = sprintf("SELECT `id`, `name`, `url`, `price` FROM `Product`");
	if(!$result = $connect->query($sql)){
	echo "Ошибка получения данных";
	}
	while(($row = $result->fetch_assoc()) && ($i < 5)){
	$data .= sprintf('<div class="body">
	<div class="card-body body cardin">
	<a href="view_product.php?id=%s">
	<img src="%s" width=200 height=200>
	<p class="rt">%s</p>
	<p>%s</p></a></div></div>',
	$row['id'], $row['url'], $row['name'], $row['price']);
	$i = $i + 1;
 }
	$data .= "</div>";
	return $data;
	}

function fnGetCatalog() {
	global $connect;
	$data = '<div class="card man-color qq">';
	$sql = sprintf("SELECT `id`, `name`, `url`, `price` FROM `Product`");
	if(!$result = $connect->query($sql)){
	echo "Ошибка получения данных";
	}
	while($row = $result->fetch_assoc()){
	$data .= sprintf('<div class="body my">
	<div class="card-body body cardin">
	<a href="../view_product.php?id=%s">
	<img src="../%s" width=200 height=200>
	<p class="rt">%s</p>
	<p>%s</p></a></div></div>',
	$row['id'], $row['url'], $row['name'], $row['price']);
 }
	$data .= "</div>";
	return $data;
	}

	function fnGetProduct($id) {
		global $connect;
		$data = '<div class="card man-color qq bodyOne">';
		$sql = sprintf("SELECT `name`, `url`, `price` FROM `Product` WHERE `id` =".$_GET['id']."");
		if(!$result = $connect->query($sql)){
		echo "Ошибка получения данных";
		}
		if ($row = $result->fetch_assoc()) {
		$data .= sprintf('<div class="">
		<div class="card-body cardin">
		<h1 class="p1"> %s</h1>
		<br>
		<img src="%s" width=500 height=500>
		<br>
		<h1 class="p1"><span class="fw-semibold">Цена:</span> %s</h1></div></div>',
		$row['name'], $row['url'], $row['price']);
	 }
		$data .= "</div>";
		return $data;
		}
	?>