<?php
$menu = "";
if(isset($_SESSION['login'])){
if($_SESSION['id_role'] == "2"){
$menu .= '<li class="nav-item">
<a class="nav-link" href="/profile/">Админ Панель</a>
 </li>';
}
$menu .= '<li class="nav-item">
<a class="nav-link" href="/catalog/">Каталог</a>
</li>
<li class="nav-item">
<a class="nav-link" href="/admin/controllers/logout.php">
Выйти </a>
</li>';
}else{
$menu = '<li class="nav-item">
<a class="nav-link" href="/catalog/">Каталог</a>
</li>
<li class="nav-item">
 <a class="nav-link" href="/auth/">Вход</a>
</li>
<li class="nav-item">
 <a class="nav-link" href="/register/">Регистрация</a>
</li>';
}
?>
<!DOCTYPE html>
<html lang=”ru”>
<head>
<meta charset=”UTF-8”>
<meta name=”viewport” content=”width=device-width, initial-scale=1.0”>
<title>Candle - Лучшие аромасвечи!</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel=”stylesheet” href=”/assets/style/style.css”>
<style>
	header, footer { font-family: Raleway; }
	section.page { min-height: 43vh; }
	div.cards_btn a { width: 48%; }

	a {
		color: black;
		transition: 0.3s;
		text-decoration: none;
	}

	a:hover {
		color: black;
	}

.fot {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
}

.qq {
	border: none;
}

.pp {
	display: flex;
	flex-direction: row;
	justify-content: space-around;
}

.ww {
	border-bottom: 2px solid green;
	/* border-style: dashed; */
}

.rt {
	height: 48px;
}

.ut {
	flex-basis: 30%;
}

.it {
	border-right: 2px solid green;
	border-right-style: dashed;
}

.nnn {
	margin-top: 5%;
}

.imgs {
	margin-right: 5px;
	margin-bottom: 10px;
}

.h1 {
	font-size: 24px;
	color: green;
}

.p1 {
	font-size: 28px;
	font-weight: 400;
	color: black;
}

.my {
	margin: 10px 10px 10px 10px;
}

.s1 {
	margin-top: 5%;
}

.s2 {
	margin-top: 5%;
}

	.im {
		width: 41px;
		height: 40px;
	}
	.bg {
		margin-top: 19%;
	}
	.nav-color {
		background-color: #333333;
	}

	.men-pos {
		justify-content: flex-end;
	}

	.man-color {
		background-color: #f5f0f0;
	}

	.card {
		display: flex;
		flex-direction: row;
		flex-wrap: wrap;
		justify-content: space-evenly;
	}
	.body {
		width: 215px;
		height: 320px;
		border: 1px solid rgba(155, 207, 253, 0);
	}

	.cardin {
		display: flex;
		flex-direction: column;
		justify-content: center;
		align-items: center;
		-webkit-box-shadow: -4px 4px 10px 0px rgba(34, 60, 80, 0.3);
		-moz-box-shadow: -4px 4px 10px 0px rgba(34, 60, 80, 0.3);
		box-shadow: -4px 4px 10px 0px rgba(34, 60, 80, 0.3);
	}

	.bodyOne {
		height: 700px;
	}

	.body:hover {
		border: 1px solid rgba(155, 207, 253, 1);
	}
</style>
</head>
<body>
	<main class="text-success-emphasis">
		<header class="nav-color border-bottom border-success-emphasis">
			<div class="container-fluid d-flex align-items-center p-0">

				<nav class="navbar navbar-expand-lg w-100 p-3 navbar-dark">
					<div class="container-fluid">
						<a class="navbar-brand" href="/"><img src="../image/logo.png" class="im" alt="Лого Candle - аромасвечи"></a>
						<!-- <button class="navbar-toggler" type="button"
								data-bs-toggle="collapse"
								data-bs-target="#navbarSupportedContent"
								aria-controls="navbarSupportedContent"
								aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button> -->
						<div class="collapse navbar-collapse men-pos"
 							id="navbarSupportedContent">
							<ul class="navbar-nav men-pos">
								<?=$menu?>
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</header>