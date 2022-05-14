<!--Проверка полей в форме регистрации и их добавление в БД-->
<?php
	//Функция для открытия сессий для вывода ошибок через flash massage
	function ses_fm($fm) {
		session_start();
		$_SESSION['flash_message'] = $fm;
		header('Location: ../blocks/404.php');
		exit();
	}

	$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
	$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
	
	if(mb_strlen($name) < 2 || mb_strlen($name) > 49) 
	{ 
		ses_fm("Недопустимая длина имени, укажите более двух символов");
	}
	else if(mb_strlen($email) < 6 || mb_strlen($email) > 49) 
	{ 
		ses_fm("Недопустимая длина Email, укажите более шести символов");
	}
	else if(mb_strlen($password) < 6 || mb_strlen($password) > 16)
	{ 
		ses_fm("Пароль должен содержать от 6 до 16 символов");
	}
	
	$password = md5($password."jg239dh4");
	$mysql = new mysqli('MP', 'mysql', '', 'mop');
	$mysql->query("INSERT INTO `reg_user` (`name`, `email`, `password`) 
	VALUES ('$name', '$email', '$password')");
	$mysql->close();
	header('Location: /');
?>