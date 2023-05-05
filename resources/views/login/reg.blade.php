<x-login.layout>
	<x-login.tabs>registration</x-login.tabs>
	@if ($reg_error)
	<div class="row">
		<div class="col-12 pt-3">
			<div class="alert alert-danger text-center">
				{{$reg_error}}
			</div>
		</div>
	</div>
	@endif
	<form action="" method="post">
		@csrf
		<div class="pt-5">
			<input name="name" type="text" placeholder="ФИО" required class="form-control">
		</div>
		<div class="pt-3">
			<input name="email" type="email" placeholder="@email" required class="form-control">
		</div>
		<div class="pt-3">
			<input name="password" type="password" placeholder="Пароль" required class="form-control">
		</div>
		<div class="pt-3">
			<input name="confirm_password" type="password" placeholder="Подтверждение пароля" required class="form-control">
		</div>
		<div class="pt-3 pb-3">
			<button class="btn btn-secondary w-100">
				<i class="fa fa-check" aria-hidden="true"></i>
				Зарегистрироваться
			</button>
		</div>
	</form>
</x-login.layout>
