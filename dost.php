<!--Вынести скрипт в отдельный файл-->
<!doctype html>
<html lang="ru">
	<head>
		<?php require "css/meta_link.php" ?>
		<title>Достопримечательность+</title>
	</head>
	<body>
	<?php require "blocks/header.php" ?>
	<div class = "block">
		<div class="container px-5 p-4">
			<div class="container px-5">
				<div class="container p-4 rounded bg-primary shadow" style="--bs-bg-opacity: .55;">
					
					<h3 class="text-center mb-4">Предложить достопримечательность для добавления на карту</h3>
					
					<form action="check_dost.php" method="post" class="needs-validation" novalidate>
						<div class="row g-2">

							<div class="col-10 mx-auto position-relative">
								<h6 class="form-label">Название объекта:</h6>
								<input name="title" type="text" class="form-control" placeholder="Памятник лавочке" required>
								<div class="invalid-tooltip">Пожалуйста, напишите название объекта.</div>
							</div>

							<div class="col-10 mx-auto position-relative">
								<h6 class="form-label">Адрес:</h6>
								<input name="address" type="text" class="form-control" placeholder="Тольятти, 42a" required>
								<div class="invalid-tooltip">Пожалуйста, укажите адрес объекта.</div>
							</div>

							<div class="col-10 mx-auto">
								<h6 class="form-label">Координаты:<small class="text-muted">(Необязательное поле)</small></h6>
								<input name="coord" type="text" class="form-control" placeholder="Введите в формате: 12.345678 98.765432">
							</div>

							<div class="col-sm-4 mx-auto position-relative">
								<h6 class="form-label">Страна:</h6>
								<select name="country" class="form-select" required>
									<option value="">Выберите страну...</option>
										<option>Россия</option>
										<option>Казахстан</option>
										<option>Китай</option>
										<option>США</option>
								</select>
								<div class="invalid-tooltip">Пожалуйста, выберите страну.</div>
							</div>

							<div class="col-sm-4 mx-auto position-relative">
								<h6 class="form-label">Город:</h6>
								<select name="state" class="form-select" required>
									<option value="">Выберите город...</option>
										<option>Новокузнецк</option>
										<option>Москва</option>
										<option>Владивосток</option>
										<option>Калининград</option>
								</select>
								<div class="invalid-tooltip">Пожалуйста, выберите город.</div>
							</div>
			
							<div class="col-10 mx-auto">
								<h6 class="form-label">Расскажите об этом месте:</h6>
								<div class="input-group">
  									<textarea name="description" class="form-control position-relative" placeholder="Достопримечательность появилась..." required></textarea>
  									<div class="invalid-tooltip">Пожалуйста, напишите пару слов об объекте.</div>
								</div>
							</div>

							<div class="col-sm-4 mx-auto">
								<h6 class="form-label">Как вы оцените это место?</h6>
								<div class="form-check">
									<input id="5" name="rad_but" type="radio" class="form-check-input" required>
									<label class="form-check-label">Отлично</label>
								</div>
								<div class="form-check">
									<input id="4" name="rad_but" type="radio" class="form-check-input" required>
									<label class="form-check-label">Хорошо</label>
								</div>
								<div class="form-check">
									<input id="3" name="rad_but" type="radio" class="form-check-input" checked required>
									<label class="form-check-label">Нормально</label>
								</div>
								<div class="form-check">
									<input id="2" name="rad_but" type="radio" class="form-check-input" required>
									<label class="form-check-label">Плохо</label>
								</div>
								<div class="form-check position-relative">
									<input id="1" name="rad_but" type="radio" class="form-check-input" required=>
									<label class="form-check-label">Ужасно</label>
								<div class="invalid-tooltip">Нам важно знать вашу оценку.</div>
								</div>
							</div>
		  
							<div class="col-sm-4 my-5 mx-auto">
								<h6 class="form-label">Есть фотографии? Загрузите!<small class="text-muted">(Необязательное поле)</small></h6>
								<input name="photo" class="form-control form-control-sm" type="file">
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

<script type="text/javascript">
	(function () {
		'use strict'
		var forms = document.querySelectorAll('.needs-validation')
		Array.prototype.slice.call(forms)
 	 	.forEach(function (form) {
 	   	form.addEventListener('submit', function (event) {
 	   	  	if (!form.checkValidity()) {
 	       		event.preventDefault()
 	       		event.stopPropagation()
 	     		}
 	     	form.classList.add('was-validated')
 	  		}, false)
 		})
	})()
</script>