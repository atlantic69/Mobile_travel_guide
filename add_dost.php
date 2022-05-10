<!--Заполнить value значениями с БД-->
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
		<div class="container px-5 p-4">
		<div class="container px-5">
			<div class="modal-content rounded-6 bg-dark text-white shadow" style="--bs-bg-opacity: .85;">
   			<div class="modal-header border-bottom-0">
   			  	<h3 class="modal-title mx-auto">Предложенные достопримечательности</h3>
   			</div>
   			<div class="modal-body py-2">
   			  	<form class="needs-validation" novalidate>
						<div class="row g-2">
							<div class="col-10 mx-auto">
								<h6 for="title_obj" class="form-label">Название объекта:</h6>
								<input type="text" class="form-control" id="title_obj" value="">
							</div>
							<div class="col-sm-4 mx-auto">
								<h6 for="country" class="form-label">Страна:</h6>
								<input type="text" class="form-control" id="country" value="">
							</div>
							<div class="col-sm-4 mx-auto">
								<h6 for="state" class="form-label">Город:</h6>
								<input type="text" class="form-control" id="state" value="">
							</div>
							<div class="col-10 mx-auto">
								<h6 for="address" class="form-label">Адрес:</h6>
								<input type="text" class="form-control" id="address" value="">
							</div>
							<div class="col-sm-4 mx-auto">
								<h6 for="address_X" class="form-label">Координата X:</h6>
								<input type="text" class="form-control" id="address_X" value="">
							</div>
							<div class="col-sm-4 mx-auto">
								<h6 for="address_Y" class="form-label">Координата Y:</h6>
								<input type="text" class="form-control" id="address_Y" value="">
							</div>
							<div class="col-10 mx-auto">
								<h6 for="description" class="form-label">Описание объекта:</h6>
								<input type="text" class="form-control" id="description" value="">
							</div>
							<div class="col-sm-4 mx-auto">
								<h6 for="rating" class="form-label">Рейтинг места:</h6>
								<div class="form-check">
									<input id="rating" name="paymentMethod" type="radio" class="form-check-input">
									<label class="form-check-label" for="rating">Здесь оценка</label>
								</div>
							</div>
							<div class="col-sm-4 mx-auto">
								<h6 for="photo" class="form-label">Фотографии объекта:</h6>
								<input class="form-control form-control-sm" id="photo" type="file">
							</div>
						</div>
					</form>
   			</div>
   			<div class="modal-footer border-top-0">
   				<div class="col-10 mx-auto">
						<button type="button" id="but_1" onclick="" class="btn btn-lg btn-success w-100 mx-0 mb-2">Добавить объект</button>
						<button type="button" id="but_2" onclick="" class="btn btn-lg btn-outline-warning w-100 mx-0 mb-2">Редактировать</button>
						<button type="button" id="but_3" onclick="" class="btn btn-lg btn-outline-danger w-100 mx-0 mb-1">Удалить</button>
					</div>
   			</div>

   		</div>
   	</div>
		</div>
	</div>
	
	<?php require "blocks/footer.php" ?>
		
	</body>
</html>