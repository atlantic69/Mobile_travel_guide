<!doctype html>
<html lang="ru">
	<head>
		
		<meta charset = "utf-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<link rel = "stylesheet" href = "css/newstyle.css">
		<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
		integrity = "sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin = "anonymous">
		
		<title>Достопримечательность+</title>
	
	</head>
	<body>
		
	<?php require "blocks/header.php" ?>
		
	<div class = "block">
		<div class="container px-5 p-4">
			<div class="container px-5">
				<div class="container p-4 rounded bg-primary shadow" style="--bs-bg-opacity: .55;">
					
					<h3 class="text-center mb-4">Предложить достопримечательность для добавления на карту</h3>
					
					<form class="needs-validation" novalidate="">
						<div class="row g-2">

							<div class="col-10 mx-auto">
								<h6 for="title" class="form-label">Название объекта:</h6>
								<input type="text" class="form-control" id="title" placeholder="Памятник лавочке" value="" required="">
							</div>

							<div class="col-10 mx-auto">
								<h6 for="address" class="form-label">Адрес:</h6>
								<input type="text" class="form-control" id="address" placeholder="Тольятти, 42a" required="">
							</div>

							<div class="col-10 mx-auto">
								<h6 for="coord" class="form-label">Координаты:</h6>
								<input type="text" class="form-control" id="coord" placeholder="12.345678, 98,765432">
							</div>

							<div class="col-sm-4 mx-auto">
								<h6 for="country" class="form-label">Страна:</h6>
								<select class="form-select" id="country" required="">
									<option value="">Выберите страну...</option>
									<option>Россия</option>
									<option>Казахстан</option>
									<option>Китай</option>
									<option>США</option>
								</select>
							</div>

							<div class="col-sm-4 mx-auto">
								<h6 for="state" class="form-label">Город:</h6>
								<select class="form-select" id="state" required="">
									<option value="">Выберите город...</option>
									<option>Новокузнецк</option>
									<option>Москва</option>
									<option>Владивосток</option>
									<option>Калининград</option>
								</select>
							</div>
			
							<div class="col-10 mx-auto">
								<h6 for="description" class="form-label">Расскажите об этом месте:</h6>
								<div class="input-group">
  									<textarea class="form-control" id="description" placeholder="Достопримечательность появилась..."></textarea>
								</div>
							</div>

							<div class="col-sm-4 mx-auto">
								<h6 class="form-label">Как вы оцените это место?</h6>
								<div class="form-check">
									<input id="1" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
									<label class="form-check-label" for="1">Отлично</label>
								</div>
								<div class="form-check">
									<input id="2" name="paymentMethod" type="radio" class="form-check-input" required="">
									<label class="form-check-label" for="2">Хорошо</label>
								</div>
								<div class="form-check">
									<input id="3" name="paymentMethod" type="radio" class="form-check-input" required="">
									<label class="form-check-label" for="3">Нормально</label>
								</div>
								<div class="form-check">
									<input id="4" name="paymentMethod" type="radio" class="form-check-input" required="">
									<label class="form-check-label" for="4">Плохо</label>
								</div>
								<div class="form-check">
									<input id="5" name="paymentMethod" type="radio" class="form-check-input" required="">
									<label class="form-check-label" for="5">Ужасно</label>
								</div>
							</div>
		  
							<div class="col-sm-4 my-5 mx-auto">
								<h6 for="photo" class="form-label">Есть фотографии? Загрузите!</h6>
								<input class="form-control form-control-sm" id="photo" type="file">
							</div>
							
							<div class="col-10 mx-auto">
								<button class="btn btn-lg btn-dark w-100" type="submit">Предложить объект</button>
							</div>

						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<?php require "blocks/footer.php" ?>
		
	</body>
</html>