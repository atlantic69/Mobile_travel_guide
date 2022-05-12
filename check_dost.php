<!--Разобраться с переадресацией на главную страницу после срабатывания алерта-->
<?php
	$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
	$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
	$coord = filter_var(trim($_POST['coord']), FILTER_SANITIZE_STRING);
	$country = filter_var(trim($_POST['country']), FILTER_SANITIZE_STRING);
	$state = filter_var(trim($_POST['state']), FILTER_SANITIZE_STRING);
	$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
	$author = filter_var(trim($_COOKIE['user']), FILTER_SANITIZE_STRING);
	$rating = filter_var(trim($_POST['rad_but']), FILTER_SANITIZE_STRING);
	$photo = filter_var(trim($_POST['photo']), FILTER_SANITIZE_STRING);

	list($coorX, $coorY) = explode(" ", $coord);

	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	$mysql->query("INSERT INTO `dost` (`title`, `address`, `coorX`, `coorY`, `country`, `state`, `description`, `author`, `rating`, `photo`)
	VALUES ('$title', '$address', '$coorX',  '$coorY', '$country', '$state', '$description', '$author', '$rating', '$photo')");
	$mysql->close();
	
	//echo "Данные успешно отправлены в базу данных";
	header('Location: /');
?>