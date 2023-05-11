<x-login.layout>

	<x-login.tabs>login</x-login.tabs>

	<form action="" method="post" class="pt-3 pb-3">
		@csrf
		<div class="pt-3">
			<input name="email" type="email" class="form-control" placeholder="@email" required>
		</div>
		<div class="pt-3">
			<input name="password" type="password" class="form-control" placeholder="Пароль" required>
		</div>
		<div class="pt-3">
			<button name="user_login" value="Y" class="btn btn-secondary w-100">
				<i class="fa fa-sign-in" aria-hidden="true"></i>
				Войти
			</button>
		</div>
	</form>

	@if ($login_error)
	<div class="row">
		<div class="col-12 pt-5">
			<div class="alert alert-danger text-center">
				Неверный логин или пароль!
			</div>
		</div>
	</div>
	@endif

	<a href="/login/recovery/">Забыл пароль</a>

</x-login.layout>