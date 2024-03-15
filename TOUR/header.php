<!--подключение-->
<?php
	$menu = '
	<div class="menus">
<a href="index.php"><img src="assets/img/logo.png" alt="img"></a>
	<div class="men">
	<a href="index.php">ПРО ЯПОНИЮ</a>
	<a href="catalog.php">ПУТЕШЕСТВИЯ</a>
			%s
</div>
	<div class="logo">
	 <form class="search" method="get" action="search.php">
      <input type="text" name="q" placeholder="Поиск" required  style="width: 250px; height:20px;">
     </form>
	</div>
</div>
	';
	$m = '';
	if(isset($_SESSION["role"])) {
		$m .= ($_SESSION["role"] == "admin") ? '<a href="admin.php">Заявки</a>' : '';
		$m .= '<a href="assets/controllers/logout.php">Выход</a>';
	} 
	$menu = sprintf($menu, $m);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="keywords" content="Japan, Kyoto, куба, Osaka, Hiroshima, Япония, Нара, Окинава, Хонсю, достопримечательности, туры, забронировать, авиабилеты, отели">
	<meta name="description" content="JAPAN туристическое агенство, бронирование туров, дешёвые авиабилеты">
	<title>JAPAN туристическое агенство</title>
	<link rel="stylesheet" href="assets/css/footer.css">
	<link rel="stylesheet" href="assets/css/style2.css">
	<script src="assets/js/script.js"></script>

	<script>
		let role = "<?= (isset($_SESSION["
		role "])) ? $_SESSION["
		role "] : "
		guest " ?>";
	</script>
</head>

<body>
	<button onclick="topFunction()" id="myBtn" title="Вверх">Вверх</button>
	<header>
			<div class="contentt">
					<?= $menu ?>
			</div>
	</header>