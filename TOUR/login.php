<!--подключение-->
<?php
	session_start();
	include "connect.php";
	include "header.php";
?>

	<main>
<div class="forms">
			
			<form action="assets/controllers/login.php" method="POST">
				<input type="text" placeholder="Логин" name="login" required><br>
				<input type="password" placeholder="Пароль" name="password" required> <br>
				<button>Войти</button>
			</form>
		
		</div>
	</main>

	<script src="assets/scripts/slider.js"></script>

