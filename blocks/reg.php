<!--Форма регистрации-->
<div class="modal fade" id="myModalReg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header p-5 pb-4 border-bottom-0">
				<h2 class="fw-bold mb-0">Регистрация</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body p-5 pt-0">
				<form action="blocks/check_reg.php" class="needs-validation" method="post" novalidate>
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-4" name="name" placeholder=" " required>
						<label>Введите никнейм</label>
						<div class="invalid-feedback">Пожалуйста, введите никнейм.</div>
					</div>
					<div class="form-floating mb-3">
						<input type="email" class="form-control rounded-4" name="email" placeholder=" " required>
						<label>Укажите email</label>
						<div class="invalid-feedback">Пожалуйста, укажите E-mail.</div>
					</div>
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-4" name="password" placeholder=" " required>
						<label>Придумайте пароль</label>
						<div class="invalid-feedback">Пожалуйста, придумайте пароль.</div>
					</div>
					<button class="btn btn-lg rounded-4 btn-primary mb-2 w-100" type="submit">Зарегистрироваться</button>
					<small class="text-muted">При регистрации вы подтверждаете согласие на обработку персональных данных.</small>
				</form>
			</div>
		</div>
	</div>
</div>

<!-- Проверка заполнения полей -->
<script src="../scripts/check_forms.js" type="text/javascript"></script>