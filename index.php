<!--Сделать смены центра карта на основе выбранного города-->
<!---->
<!doctype html>
<html lang="ru">
	<head>
		<?php require "css/meta_link.php" ?>
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Мобильный путеводитель</title>
	</head>
	<body>
		<?php require "blocks/header.php" ?>
		<div class = "block">
			<?php require "scripts/filling_data.php" ?>
			<div id="map"></div>
		</div>
		<?php require "blocks/footer.php" ?>

		<!--Скрипт для загрузки карт-->
		<script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=09c24e37-6654-4cf3-a376-6312a49c2e14" type="text/javascript"></script>
    	<script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    	<script src="scripts/object_manager.js" type="text/javascript"></script>
	</body>
</html>