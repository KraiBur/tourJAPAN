<!--подключение-->
<?php
	$connect = new mysqli("localhost", "root", "", "tour");
	$connect->set_charset("utf8");

	if($connect->connect_error)
		die("Ошибка подключения: ". $connect->connect_error);
