<!--Форма предложенных достопримечательностей, доступна только модераторам-->
<!doctype html>
<html lang="ru">
	<head>
		<?php require "css/meta_link.php" ?>
		<title>Добавление+</title>
	</head>
	<body>
	<?php require "blocks/header.php" ?>
	<div class = "block">
		<?php require "edit_attraction.php"	?> <!--Подключение полей предложенного объекта-->
		<div class="container px-5 p-4">
		<div class="container px-5">
			<div class="container p-4 rounded-3 bg-dark text-white shadow" style="--bs-bg-opacity: .8;">
   			<h3 class="text-center mb-4">Предложенные достопримечательности</h3>
   			<form>
					<div class="row g-2">
						<div class="col-sm-1 mx-auto">
							<h6 class="form-label">№:</h6>
							<input type="text" class="form-control" name="id_dost" value="<?php echo $id_dost ?>">
						</div>
						<div class="col-9 mx-auto">
							<h6 class="form-label">Название объекта:</h6>
							<input type="text" class="form-control" name="title" value="<?php echo $title ?>">
						</div>
						<div class="col-sm-5 mx-auto">
							<h6 class="form-label">Страна:</h6>
							<input type="text" class="form-control" name="country" value="<?php echo $country ?>">
						</div>
						<div class="col-sm-5 mx-auto">
							<h6 class="form-label">Город:</h6>
							<input type="text" class="form-control" name="state" value="<?php echo $state ?>">
						</div>
						<div class="col-sm-5 mx-auto">
							<h6 class="form-label">Адрес:</h6>
							<input type="text" class="form-control" name="address" value="<?php echo $address ?>">
						</div>
						<div class="col-sm-5 mx-auto">
							<h6 class="form-label">Координаты:</h6>
							<input type="text" class="form-control" name="coord" value="<?php echo $coord ?>">
						</div>
						<div class="col-11 mx-auto">
							<h6 class="form-label">Описание объекта:</h6>
							<textarea type="text" class="form-control" name="description"><?php echo $description ?></textarea>
						</div>
						<div class="col-3 mx-auto">
							<h6 class="form-label">Автор предложения:</h6>
							<input type="text" class="form-control" name="author" value="<?php echo $author ?>">
						</div>
						<div class="col-2 mx-auto">
							<h6 class="form-label">Оценка автора:</h6>
							<input type="text" class="form-control" name="rating" value="<?php echo $rating ?>">
						</div>
						<div class="col-4 mx-auto">
							<h6 class="form-label">Фотография объекта:</h6>
							<input class="form-control" name="photo" type="file">
						</div>
						<div class="col-sm-5 mt-4 mx-auto">
							<button type="submit" formaction="delete_from_map.php" formmethod="post" class="btn btn-lg btn-danger w-100">Отклонить объект</button>
						</div>
						<div class="col-sm-5 mt-4 mx-auto">
							<button type="submit" formaction="adding_on_map.php" formmethod="post" class="btn btn-lg btn-success w-100">Добавить объект</button>
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