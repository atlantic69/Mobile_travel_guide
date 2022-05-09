<?php
	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	
	if(mb_strlen($name) < 2 || mb_strlen($name) > 49) 
	{ 
		echo "Недопустимая длина имени";
		exit();
	} 
	
	else if(mb_strlen($email) < 6 || mb_strlen($email) > 49) 
	{ 
		echo "Недопустимая длина Email";
		exit();
	}
	
	else if(mb_strlen($password) < 6 || mb_strlen($password) > 16)
	{ 
		echo "Пароль должен содержать от 6 до 16 символов";
		exit();
	}
	
	$password = md5($password."jg239dh4");
	
	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	$mysql->query("INSERT INTO `reg_user` (`name`, `email`, `password`) 
	VALUES ('$name', '$email', '$password')");
	$mysql->close();
	
	header('Location: /');
?>