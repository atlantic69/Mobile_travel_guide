<!--Переделать форму, добавить чат-бота-->
<!doctype html>
<html lang="ru">
	<head>
		<?php require "css/meta_link.php" ?>
		<title>Служба поддержки</title>
	</head>
	<body>
	<?php require "blocks/header.php" ?>
	<div class = "block">
		<div class="container p-5 ">
			<div class="container p-5 ">
				<div class="container rounded p-4 bg-primary" style="--bs-bg-opacity: .55;">
					<h2 class="text-center p-3">Служба поддержки:</h2>
					
					<form action="check_support.php" method="post">
						<input type="email" name="email" placeholder="Введите ваш Email, чтобы мы могли ответить" class="form-control"><br>
						<textarea name="message" class="form-control" placeholder="Опишите проблему" rows="10"></textarea><br>
						<button type="submit" name="send" class="btn btn-lg btn-dark">Отправить сообщение</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php require "blocks/footer.php" ?>
	</body>
</html>