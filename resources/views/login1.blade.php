<x-layout>
	<div class="container">
		@if ($login_error)
		<div class="row">
			<div class="col-12 pt-5">
				<div class="alert alert-danger text-center">
					Неверный логин или пароль!
				</div>
			</div>
		</div>
		@endif
		<div class="row pt-5 justify-content-center">
			<div class="col-lg-4 col-md-8 col-sm-12 col-12">
				<div class="card p-3">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link @if($tab=='login') active @endif" href="?tab=login">
								Вход
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link @if($tab=='registration') active @endif" href="?tab=registration">
								Регистрация
							</a>
						</li>
					</ul>
					@if($tab=='login')
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
					@endif
					@if($tab=='registration') registration @endif
				</div>
			</div>
		</div>
	</div>
</x-layout>