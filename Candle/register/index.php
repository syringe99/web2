<?php
 session_start();
 if(isset($_SESSION['login'])){
	header("Location: ../index.php");
	exit;
	}
	
 include "../inc/header.php";
?>
 <section class="page">
<div class="container p-3">
<?php
if(isset($_GET['message'])){
echo "<div class='border border-danger text-danger
 text-center pt-4 pb-4 mb-3'>
{$_GET['message']}
</div>";
}
?>
<h1 class="text-center mb-3 text-success-emphasis display-1">Регистрация</h1>
<form action="/admin/controllers/registration.php" method="post" class="m-auto needs-validation">
<div class="mb-3">
<label for="surname" class="form-label fs-5">ФИО</label>
<input type="text" class="form-control shadow-sm p-3 rounded-pill"
id="full_name" name="full_name" required>
<div class="invalid-feedback">
Поле обязательно для заполнения.
</div>
</div>
<div class="mb-3">
<label for="login" class="form-label fs-5">Логин</label>
 <input type="text" class="form-control shadow-sm p-3 rounded-pill"
id="login" name="login" required>
<div class="invalid-feedback">
Поле обязательно для заполнения.
</div>
 </div>
<div class="mb-3">
 <label for="phone" class="form-label fs-5">Телефон</label>
<input type="tel" class="form-control shadow-sm p-3 rounded-pill"
id="phone" name="phone" minlength="12" maxlength="17" pattern="/+?[0-9/(/)/-]+"
placeholder="+7(XXX)-XXX-XX-XX" value="+7" required>
<div class="invalid-feedback">
Поле обязательно для заполнения.
</div>
</div>
<div class="mb-3">
<label for="password" class="form-label fs-5">Пароль</label>
<input type="password" class="form-control shadow-sm p-3 rounded-pill"
id="password" name="password" minlength="6" required>
<div class="invalid-feedback">
Поле обязательно для заполнения.
</div>
 </div>
<div class="mb-3">
<label for="password-repeat" class="form-label fs-5">Повторите
пароль</label>
<input type="password" class="form-control shadow-sm p-3 rounded-pill"
id="password-repeat" name="password-repeat" minlength="6" required>
<div class="invalid-feedback">
Поле обязательно для заполнения.
</div>
 </div>
 <input type="submit" class="btn btn-success mb-3 mt-3 w-100 shadow-sm p-3 fs-2
rounded-pill fw-bold" value="Зарегистрироваться">
 </form>
</div>
</section>

<?php
 include "../inc/footer.php";
?>
