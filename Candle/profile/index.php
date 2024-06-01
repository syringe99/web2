<?php
 session_start();
 if(!isset($_SESSION['login'])){
	header("Location: /auth/");
	exit;
	}
	
 include "../inc/header.php";
?>
 
 <h1>Редактирование товаров</h1>

<form action="/admin/controllers/num1.php" method="post">
<input type="text" id="num1name" name="num1name" placeholder="Название товара">
<input type="text" id="num1price" name="num1price" placeholder="Цена">
<input type="text" id="num1url" name="num1url" placeholder="Url изображения">
<input type="submit" value="добавить товар">
</form>

<form action="../admin/controllers/num2.php" method="post">
<input type="text" id="num2id" name="num2id" placeholder="id товара">
<input type="submit" value="удалить товар">
</form>

<form action="../admin/controllers/num3.php" method="post">
<input type="text" id="num3id" name="num3id" placeholder="id товара">
<input type="text" id="num3name" name="num3name" placeholder="Название товара">
<input type="text" id="num3url" name="num3url" placeholder="Url изображения">
<input type="submit" value="изменить товар">
</form>

<?php
 include "../inc/footer.php";
?>
