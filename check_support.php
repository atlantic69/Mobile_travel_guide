<!--Проверка полей на странице службы поддержки и отправка на указанную почту. Работает только на реальном сервере.
	Можно переделать вывод ошибок через страницу 404-->
<?php
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$error = '';
	if (trim($email) == '')	$error = 'Введите ваш email';
	else if (trim($message) == '') $error = 'Введите само сообщение';
	else if (strlen($message) < 20) $error = 'Сообщение должно быть более 20 символов';
	
	if ($error != '') {
		echo $error;
		exit;
	}
	$subject = "=?utf-8?B?".base64_encode("Тестовое сообщение")."?=";
	$headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html.charset=utf-8\r\n"; 
	mail('mail@mail.com', $subject, $message, $headers);
	header('Location: /support.php');
?>