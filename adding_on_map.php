<!--Разобраться с переадресацией на главную страницу после срабатывания алерта-->
<?php
	$id_dost = filter_var(trim($_POST['id_dost']), FILTER_SANITIZE_STRING);
	$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
	$author = filter_var(trim($_POST['author']), FILTER_SANITIZE_STRING);
	$country = filter_var(trim($_POST['country']), FILTER_SANITIZE_STRING);
	$state = filter_var(trim($_POST['state']), FILTER_SANITIZE_STRING);
	$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
	$coorX = filter_var(trim($_POST['coorX']), FILTER_SANITIZE_STRING);
	$coorY = filter_var(trim($_POST['coorY']), FILTER_SANITIZE_STRING);
	$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
	$rating = filter_var(trim($_POST['rating']), FILTER_SANITIZE_STRING);
	$photo = filter_var(trim($_POST['photo']), FILTER_SANITIZE_STRING);
	$added_on_map = 1;

	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	
	$mysql->query("UPDATE `dost` SET
	`title` = '$title',
	`author` = '$author',
	`country` = '$country',
	`state` = '$state',
	`address` = '$address',
	`coorX` = '$coorX',
	`coorY` = '$coorY',
	`description` = '$description',
	`rating` = '$rating',
	`photo` = '$photo',
	`added_on_map` = '$added_on_map'
	WHERE `id` = '$id_dost'");
	
	$mysql->close();
	
	header('Location: add_dost.php');
?>