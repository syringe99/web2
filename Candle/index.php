<?php
 session_start();
include "inc/header.php";
// include "function/connect.php";
include "function/function.php";
?>
<body class="man-color">
<div class="container p-3 text-center qq">
<h1 class="mt-3 mb-4 h1">
Аромасвечи ручной работы Candle - Лучший выбор для создания уютной и комфортной атмосферы!
</h1>
<p class="p-1 pt-4 display-6 p1">
 Удивите ваших друзей! У нас вы найдете свечи на любой вкус)
</p>
</div>
<section class="page">
<div class="container p-3 text-center">
<?php
echo fnGet();
?>
</div>
</section>
<section class="text-center s1">
	<h1>Почему стоит <span class="ww">выбрать</span> именно нас?</h1>
	<div class="pp w-100 s2 p1">
		<div class="ut it"><img src="./image/p1.jpg" class="imgs" height ="30" alt=""><span>Уникальный дизайн</span>
	<br>
	<span class="">Наши продукты производятся с учетом пожеланий наших клиентов</span>
	</div>
		<div class="ut it"><img src="./image/p2.png" class="imgs" height ="30" alt=""><span>большой ассортимент</span>
		<br>
	<span class="">За годы продаж разработали ассортимент под любой вкус!</span>
	</div>
		<div class="ut"><img src="./image/p3.png" class="imgs" height ="30" alt=""><span>Внимание к деталям</span>
		<br>
	<span class="">Только натуральные материалы и контроль над каждым аспектом производства</span>
	</div>
	</div>
</section>
<?php
include "inc/footer.php";
?>
