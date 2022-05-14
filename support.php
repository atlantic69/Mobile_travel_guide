<!--Форма обратной связи.
	Можно переделать форму или добавить чат-бота-->
<!doctype html>
<html lang="ru">
	<head>
		<?php require "css/meta_link.php" ?>
		<title>Обратная связь</title>
	</head>
	<body>
	<?php require "blocks/header.php" ?>
	<div class = "block">
		<div class="container p-5">
			<div class="container p-5">
				<div class="container p-4 px-5 rounded bg-primary shadow" style="--bs-bg-opacity: .55;">
					<h2 class="text-center mb-4">Форма обратной связи:</h2>
					<form action="check_support.php" method="post">
						<input type="email" name="email" placeholder="Введите ваш Email, чтобы мы могли ответить" class="form-control"><br>
						<textarea name="message" class="form-control" placeholder="Расскажите нам о своих предложениях или возникших проблемах." rows="8"></textarea><br>
						<button type="submit" name="send" class="btn btn-lg btn-dark">Отправить сообщение</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php require "blocks/footer.php" ?>
	</body>
</html>