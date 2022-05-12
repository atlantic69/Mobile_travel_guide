<!--Разобраться с переадресацией на главную страницу после срабатывания алерта-->
<?php
	$id_dost = filter_var(trim($_POST['id_dost']), FILTER_SANITIZE_STRING);

	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	$mysql->query("DELETE FROM `dost` WHERE `id` = '$id_dost'");
	$mysql->close();
	
	header('Location: add_dost.php');
?>