<!--Вынести скрипт в отдельный файл-->
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
						<input type="text" class="form-control rounded-4" id="name" name="name" placeholder=" " required>
						<label for="name">Введите никнейм</label>
						<div class="invalid-feedback">Пожалуйста, введите никнейм.</div>
					</div>
								
					<div class="form-floating mb-3">
						<input type="email" class="form-control rounded-4" id="email" name="email" placeholder=" " required>
						<label for="email">Укажите email</label>
						<div class="invalid-feedback">Пожалуйста, укажите E-mail.</div>
					</div>
							
					<div class="form-floating mb-3">
						<input type="password" class="form-control rounded-4" id="password" name="password" placeholder=" " required>
						<label for="password">Придумайте пароль</label>
						<div class="invalid-feedback">Пожалуйста, придумайте другой пароль.</div>
					</div>
								
					<button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Зарегистрироваться</button>
					<small class="text-muted">При регистрации вы подтверждаете согласие на обработку персональных данных.</small>
						
				</form>
			</div>
				
		</div>
	</div>
</div>

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