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
		<div class="container">
			<div class="container">
				<div class="container rounded p-5 bg-primary" style="--bs-bg-opacity: .75;">
					
					<h2 class="text-center">Добавить достопримечательность:</h2>
					
					<form class="needs-validation" novalidate="">
						<div class="row g-1">
            
							<div class="col-12">
								<label for="address" class="form-label">Адрес</label>
								<input type="text" class="form-control" id="address" placeholder="ул. Тольятти, 42" required="">
								<div class="invalid-feedback">
									Пожалуйста, введите адрес объекта.
								</div>
							</div>

							<div class="col-12">
								<label for="address2" class="form-label">Координаты <span class="">(Необязательно)</span></label>
								<input type="text" class="form-control" id="address2" placeholder="">
							</div>

							<div class="col-sm-6">
								<label for="country" class="form-label">Страна</label>
								<select class="form-select" id="country" required="">
									<option value="">Выберите страну...</option>
									<option>Россия</option>
								</select>
								<div class="invalid-feedback">
									Пожалуйста, выберите действующую страну.
								</div>
							</div>

							<div class="col-sm-6">
								<label for="state" class="form-label">Город</label>
								<select class="form-select" id="state" required="">
									<option value="">Выберите город...</option>
									<option>Новокузнецк</option>
								</select>
								<div class="invalid-feedback">
									Пожалуйста, выберите действующий город.
								</div>
							</div>
			
							<div class="col-12">
								<label for="firstName" class="form-label">Название объекта</label>
								<input type="text" class="form-control" id="firstName" placeholder="Памятник лавочке, на которой я сидел (:" value="" required="">
								<div class="invalid-feedback">
									Действительное название обязательно.
								</div>
							</div>

							<div class="col-12">
								<label for="lastName" class="form-label">Расскажите об этом месте</label>
								<input type="text" class="form-control" id="lastName" rows="5" placeholder="Достопримечательность появилась..." value="" required="">
								<div class="invalid-feedback">
									Описание обязательно.
								</div>
							</div>

							<h5 class="my-3">Как вы оцените это место?</h5>
          
							<div class="my-0 mb-3 col-sm-6">
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
		  
							<div class="mb-3 col-sm-6">
								<label for="formFileSm" class="form-label"><h5 class="mb-2">Есть фотографии? Загрузите!</h5></label>
								<input class="form-control form-control-sm" id="formFileSm" type="file">
							</div>
							
							
							<button class="my-3 w-100 btn btn-dark" type="submit">Предложить достопримечательность</button>
						</div>
					</form>
				
				</div>
			</div>
		</div>
	</div>
	
	
		
	<?php require "blocks/footer.php" ?>
		
	</body>
</html>