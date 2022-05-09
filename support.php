<!doctype html>
<html lang="ru">
	<head>
		
		<meta charset = "utf-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<link rel = "stylesheet" href = "css/newstyle.css">
		<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
		integrity = "sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin = "anonymous">
		
		<title>Служба поддержки</title>
	
	</head>
	<body>
		
	<?php require "blocks/header.php" ?>
		
	<div class = "block">
		<div class="container p-5 ">
			<div class="container p-5 ">
				<div class="container rounded p-5 bg-primary" style="--bs-bg-opacity: .6;">
					
					<h2 class="text-center">Служба поддержки:</h2>
					
					<form action="check.php" method="post">
						<input type="email" name="email" placeholder="Введите ваш Email, чтобы мы могли ответить" class="form-control"><br>
						<textarea name="message" class="form-control" placeholder="Опишите проблему" rows="10"></textarea><br>
						<button type="submit" name="send" class="btn btn-dark">Отправить</button>
					</form>
				
				</div>
			</div>
		</div>
	</div>
		
	<?php require "blocks/footer.php" ?>
		
	</body>
</html>