<!--Вынести скрипт в отдельный файл-->
<div class="modal fade" id="myModalAuth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
				
			<div class="modal-header p-5 pb-4 border-bottom-0">
				<h2 class="fw-bold mb-0">Авторизация</h2>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
						
			<div class="modal-body p-5 pt-0">
				<form action="blocks/check_auth.php" class="needs-validation" method="post" novalidate>
							
					<div class="form-floating mb-3">
						<input type="text" class="form-control rounded-4" name="email" placeholder=" " required>
						<label>Электронная почта</label>
						<div class="invalid-feedback">Пожалуйста, введите E-mail.</div>
					</div>
							
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-4" name="password" placeholder=" " required>
						<label>Пароль</label>
						<div class="invalid-feedback">Пожалуйста, укажите действующий пароль.</div>
					</div>
					<span><small>Забыли пароль?</small></span>
					
					<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Войти</button>
					<small class="text-muted">При входе вы подтверждаете согласие с условиями использования сервиса и политикой о данных пользователей.</small>
						
				</form>
			</div>
				
		</div>
	</div>
</div>

<!-- Проверка заполнения полей -->
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