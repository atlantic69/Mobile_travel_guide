<?php
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	
	$password = md5($password."jg239dh4");
	
	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	
	$result = $mysql->query("SELECT * FROM `reg_user` 
	WHERE `email` = '$email' AND `password` = '$password'");
	
	$user = $result->fetch_assoc();
	
	if(count($user) == 0)
	{
		echo "Такой пользователь не найден";
		exit();
	}
	
	setcookie('user', $user['name'], time() + 3600, '/');
	
	$mysql->close();
	
	header('Location: /');

?>