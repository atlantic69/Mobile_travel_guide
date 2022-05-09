<!doctype html>
<html lang="ru">
	<head>
		
		<meta charset = "utf-8">
		<meta name = "viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<link rel = "stylesheet" href = "css/newstyle.css">
		<link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
		integrity = "sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin = "anonymous">
		
		<title>Добавление+</title>
	
	</head>
	<body>
		
	<?php require "blocks/header.php" ?>
		
	<div class = "block">
		<div class="container p-4">
					
			<div class="modal-content rounded-6 bg-dark text-white shadow" style="--bs-bg-opacity: .85;">
   			<div class="modal-header border-bottom-0">
   			  	<h3 class="modal-title">Предложенные достопримечательности</h3>
   			  	<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
   			</div>
   			<div class="modal-body py-0">
   			  	<form class="needs-validation" novalidate="">
						<div class="row g-2">
							<div class="col-12">
								<h6 for="title_obj" class="form-label">Название объекта:</h6>
								<input type="text" class="form-control" id="title_obj">
							</div>
							<div class="col-12">
								<h6 for="address" class="form-label">Адрес:</h6>
								<input type="text" class="form-control" id="address">
							</div>
							<div class="col-6">
								<h6 for="address_X" class="form-label">Координата X:</h6>
								<input type="text" class="form-control" id="address_X">
							</div>
							<div class="col-6">
								<h6 for="address_Y" class="form-label">Координата Y:</h6>
								<input type="text" class="form-control" id="address_Y">
							</div>
							<div class="col-sm-6">
								<h6 for="country" class="form-label">Страна:</h6>
								<input type="text" class="form-control" id="country">
							</div>
							<div class="col-sm-6">
								<h6 for="state" class="form-label">Город:</h6>
								<input type="text" class="form-control" id="state">
							</div>
							<div class="col-12">
								<h6 for="description" class="form-label">Расскажите об этом месте:</h6>
								<input type="text" class="form-control" id="description" rows="2">
							</div>
							<div class="col-sm-6">
								<h6 for="rating" class="form-label">Рейтинг места:</h6>
								<div class="form-check">
									<input id="rating" name="paymentMethod" type="radio" class="form-check-input">
									<label class="form-check-label" for="rating">Здесь оценка</label>
								</div>
							</div>
							<div class="col-sm-6">
								<h6 for="photo" class="form-label">Есть фотографии? Загрузите!</h6>
								<input class="form-control form-control-sm" id="photo" type="file">
							</div>
						</div>
					</form>
   			</div>

   			<div class="modal-footer flex-column border-top-0">
   				<button type="button" class="btn btn-lg btn-success w-100 mx-0 mb-2">Добавить объект</button>
					<button type="button" class="btn btn-lg btn-warning w-100 mx-0 mb-2">Редактировать</button>
					<button type="button" class="btn btn-lg btn-danger w-100 mx-0 mb-1">Удалить</button>
   			</div>

   		</div>
		</div>
	</div>
	
	<?php require "blocks/footer.php" ?>
		
	</body>
</html>