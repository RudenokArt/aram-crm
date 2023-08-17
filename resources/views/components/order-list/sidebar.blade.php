<div class="card">
	<div class="card-header text-secondary">
		<b>СОРТИРОВКА:</b>
	</div>
	<div class="card-body">
		<form action="" method="get">
			<select name="order" class="form-select">
				<option @if($order=='id') selected @endif	value="id">
					По дате создания
				</option>
				<option @if($order=='updated_at') selected @endif value="updated_at">
					По дате обновления
				</option>
				<option @if($order=='status') selected @endif value="status">
					По статусу
				</option>
				<option @if($order=='contractor') selected @endif value="contractor">
					По исполнителю
				</option>
				<option @if($order=='manager') selected @endif value="manager">
					По менеджеру
				</option>
			</select>

			<select name="sort" class="form-select mt-2">
				<option @if($sort=='asc') selected @endif value="asc">
					по убыванию
				</option>
				<option @if($sort=='desc') selected @endif value="desc">
					по возрастанию
				</option>
			</select>
			<button class="btn btn-outline-primary mt-2 w-100">
				<i class="fa fa-check" aria-hidden="true"></i>
			</button>	
</form>				
</div>
</div>
<hr>
<div class="card">
	<div class="card-header h6 text-secondary">Категория:</div>
	<div class="card-body">
		<form action="">
			<select class="form-select">
				<option value="">Модульные картины</option>
				<option value="">Фотообои</option>
				<option value="">Натяжные потолки</option>
			</select>
		</form>
	</div>
	<div class="card-header h6 border-top text-secondary">
		Период:
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-6">
				<input type="text" class="form-control">
			</div>
			<div class="col-6">
				<input type="text" class="form-control">
			</div>
		</div>
	</div>
</div>
