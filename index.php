<!--Подогнать высоту под размеры монитора-->
<!--Сделать смену города нормальной-->
<!--Посмотреть собственные стили-->
<!--Вынести теги с head`а в отдельный файл-->
<!doctype html>
<html lang="ru">
	<head>

		<script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU&amp;apikey=<09c24e37-6654-4cf3-a376-6312a49c2e14>" type="text/javascript"></script>
    		<script src="https://yandex.st/jquery/2.2.3/jquery.min.js" type="text/javascript"></script>
    		<script src="object_manager.js" type="text/javascript"></script>
			<style>
      			html, body, #map {
     		    	width: 100%; height: 100%; padding: 0; margin: 0;
    		    }
    		    a {
            		color: #fff; /* Цвет ссылки */
            		text-decoration: none; /* Убираем подчеркивание у ссылок */
        		}
        		a:visited {
        		    color: #fff; /* Цвет посещённой ссылки */
        		}
        		a:hover {
        		    color: ##00ADE4; /* Цвет ссылки при наведении на нее курсора мыши */
        		}
    		</style>

		<meta charset = "utf-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<link rel = "stylesheet" href = "css/newstyle.css">
		<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
		integrity = "sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin = "anonymous">
		
		<link rel="shortcut icon" href="img/favicon.ico">
		<title>Мобильный путеводитель</title>

	</head>
	<body>
		
		<?php require "blocks/header.php" ?>
		
		<div class = "block">
			<div id="map"></div>
		</div>
		
		<?php require "blocks/footer.php" ?>
		
		
	</body>
</html>