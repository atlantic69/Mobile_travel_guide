<!--Страница для вывода ошибок-->
<!doctype html>
<html lang="ru">
	<head>
		<?php require "../css/meta_link.php" ?>
		<title>Error404</title>
	</head>
	<body>
		<div class = "block">
			<div class="container text-center fs-3 p-5">
				<p><b>Error 404</b></p>
				<a href="/index.php" class="text-black"><b>Вернуться на главную страницу</b></a>
				<?php
					session_start();
					if (isset($_SESSION['flash_message'])) {
						$fm = $_SESSION['flash_message'];
    					echo "<script>alert('$fm')</script>";
    					unset($_SESSION['flash_message']);
					}
				?>
			</div>
		</div>
	</body>
</html>