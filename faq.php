<!--Раздел с ответами на частые вопросы.
	Можно было бы сформировать шаблон для вопросов и выводить их на основе json-файла с вопросами и ответами-->
<!doctype html>
<html lang="ru">
	<head>
		<?php require "css/meta_link.php" ?>
		<title>Часто задаваемые вопросы</title>
	</head>
	<body>
		<?php require "blocks/header.php" ?>
		<div class = "block">
			<div class="container p-5">
				<div class="container p-5">
					<div class="container p-4 px-5 rounded bg-primary shadow" style="--bs-bg-opacity: .55;">
						<h2 class="text-center mb-4">Раздел часто задаваемых вопросов:</h2>
						<div class="accordion" id="accordionExample">
							<div class="accordion-item rounded mb-3">
								<h2 class="accordion-header" id="headingOne">
									<button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
										Нужно ли быть жителем выбранного города, чтобы добавить достопримечательность на карту?
									</button>
								</h2>
								<div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>Ответ: </strong>Нет. Любой зарегистрированный пользователь может добавлять достопримечательности на карту.
									</div>
								</div>
							</div>
							<div class="accordion-item rounded mb-3">
								<h2 class="accordion-header" id="headingTwo">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
										Как добавить достопримечательность на карту?
									</button>
								</h2>
								<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>Ответ: </strong>
									</div>
								</div>
							</div>
							<div class="accordion-item rounded mb-3">
								<h2 class="accordion-header" id="headingFour">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
										Могу ли я использовать ваш контент на своем сайте?
									</button>
								</h2>
								<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>Ответ: </strong>
									</div>
								</div>
							</div>
							<div class="accordion-item rounded mb-3">
								<h2 class="accordion-header" id="headingFive">
									<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
										Как установить фотографию в профиле?
									</button>
								</h2>
								<div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
									<div class="accordion-body">
										<strong>Ответ: </strong>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php require "blocks/footer.php" ?>
	</body>
</html>