<div class="modal fade" id="myModalReg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
				
			<div class="modal-header p-5 pb-4 border-bottom-0">
				<h2 class="fw-bold mb-0">Регистрация</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
						
			<div class="modal-body p-5 pt-0">
				<form action="blocks/check_reg.php" class="" method="post">
					
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-4" id="name" name="name" placeholder="Name">
						<label for="name">Укажите ваше имя</label>
					</div>
								
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-4" id="email" name="email" placeholder="name@example.com">
						<label for="email">Укажите Email</label>
					</div>
							
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-4" id="password" name="password" placeholder="Password">
						<label for="password">Придумайте пароль</label>
					</div>
								
					<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Зарегистрироваться</button>
					<small class="text-muted">При регистрации вы подтверждаете согласие на обработку персональных данных.</small>
						
				</form>
			</div>
				
		</div>
	</div>
</div>