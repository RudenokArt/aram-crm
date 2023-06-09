<x-login.layout>

	<x-login.tabs>recovery</x-login.tabs>
	<form method="post" action="" class="pt-3 pb-3">
	@csrf
		<div class="alert alert-info text-center">
			Восстановление пароля
		</div>
	<div class="pb-1">
		Ваш Email:
	</div>
	<div>
		<input name="email" type="email" required class="form-control" placeholder="@email">
	</div>
	<div class="pt-3">
		<button class="btn btn-secondary w-100">
			<i class="fa fa-envelope-o" aria-hidden="true"></i>
		</button>
	</div>
	</form>
	@if($recovery != 'NO' and $recovery != 'NONE')
	<div class="alert alert-{{$alert}} text-center">
		{{$recovery}}
	</div>
	@elseif($recovery == 'NONE')
	<div class="alert alert-danger text-center">
		Пользователя с таким email не существует!
	</div>
	@endif
</x-login.layout>