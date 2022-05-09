<div class="modal fade" id="myModalAuth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
				
			<div class="modal-header p-5 pb-4 border-bottom-0">
				<h2 class="fw-bold mb-0">Вход</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
						
			<div class="modal-body p-5 pt-0">
				<form action="blocks/check_auth.php" class="" method="post">
							
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-4" id="email" name="email" placeholder="email@example.com">
						<label for="email">Электронная почта</label>
					</div>
							
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-4" id="password" name="password" placeholder="Password">
						<label for="password">Пароль</label>
					</div>
					<a href="#"><small>Забыли пароль?</small></a>
					
					<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Войти</button>
					<small class="text-muted">При входе вы подтверждаете согласие с условиями использования сервиса и политикой о данных пользователей.</small>
						
				</form>
			</div>
				
		</div>
	</div>
</div>