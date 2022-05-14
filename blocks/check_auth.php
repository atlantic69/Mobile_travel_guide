<!--Проверка существования пользователя и установка сессии-->
<?php
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	$password = md5($password."jg239dh4");
	
	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	$pull_name = $mysql->query("SELECT `name` FROM `reg_user`
	WHERE `email` = '$email' AND `password` = '$password'");
	$user = $pull_name->fetch_assoc();

	if(count($user) == 0)
	{
		session_start();
		$_SESSION['flash_message'] = 'Такой пользователь не найден';
		header('Location: 404.php');
		exit();
	}
	
	setcookie('user', $user['name'], time() + 3600, '/');
	$mysql->close();
	header('Location: /');
?>