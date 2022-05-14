<!--Создать страницу для настроек и избранного-->
<!--Добавить переключение городов-->
<?php require "css/meta_link.php" ?>

<header class="p-3 bg-dark text-white">
	<div class="container">
		<div class="navbar navbar-expand-lg navbar-dark bg-dark">
			<a href="index.php" class="d-flex align-items-center px-3">
				<img src="img/mop.png" alt="mop" width="40" height="40" class="rounded">
			</a>
			<span class="fs-4"><a href="index.php">Мобильный путеводитель</a></span>

			<div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
				<ul class="navbar-nav col-12">
					<li class="nav-link px-4"></li>
					<li class="nav-link px-5"></li>
					<li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle text-white" role="button" data-bs-toggle="dropdown">Новокузнецк</a>
						<ul class="dropdown-menu dropdown-menu-dark">
							<li><a class="dropdown-item" href="#">Новокузнецк</a></li>
							<li><a class="dropdown-item" href="#">Москва</a></li>
							<li><a class="dropdown-item" href="#">Владивосток</a></li>
							<li><a class="dropdown-item" href="#">Калининград</a></li>
						</ul>
					</li>
				</ul>
			</div>

			<!--Проверка куки-->
			<?php if ($_COOKIE['user'] != ''): ?>

			<div class="dropdown me-4">
				<a href="#" class="btn btn-outline-light dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false"> <?=$_COOKIE['user']?> </a>

				<ul class="dropdown-menu dropdown-menu-dark">
					<li><a class="dropdown-item" href="dost.php">Достопримечательность +</a></li>
					<li><a class="dropdown-item" href="#">Избранное</a></li>
					<?php
					//Проверка админки
						$user_name = filter_var(trim($_COOKIE['user']), FILTER_SANITIZE_STRING);
						$mysql = new mysqli('MP', 'mysql', '', 'mop');
						$pull_admin = $mysql->query("SELECT `admin` FROM `reg_user` WHERE `name` = '$user_name'");
						$admin = $pull_admin->fetch_assoc();
						$mysql->close();
						if ($admin['admin'] == 1):
					?>
					<li><a class="dropdown-item" href="add_dost.php">Добавление+</a></li>
					<?php endif; ?>
					<li><a class="dropdown-item" href="#">Настройки</a></li>
					<li><hr class="dropdown-divider"></li>
					<li><a class="dropdown-item bg-danger text-white" href="blocks/exit.php">Выход</a></li>
				</ul>
				<svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle ms-2" viewBox="0 0 16 16">
					<path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
					<path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
				</svg>
			</div>

			<?php else: ?>
			<button type="button" class="btn btn-outline-light me-3" data-bs-toggle="modal" data-bs-target="#myModalReg">Регистрация</button>
			<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalAuth">Вход</button>
			<?php endif; ?>

		</div>
	</div>
</header>

<?php require "reg.php" ?>
<?php require "auth.php" ?>

<!--Скрипт для открывания модулей регистрации-авторизации-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
		crossorigin="anonymous">
</script>