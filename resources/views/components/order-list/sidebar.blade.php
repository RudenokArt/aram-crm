<div class="card">
	<div class="card-header text-secondary">
		<b>СОРТИРОВКА:</b>
	</div>
	<div class="card-body">
		<form action="" method="get">
			<select name="order" class="form-select">
				<option @if($order=='created_at') selected @endif	value="created_at">
					По дате
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
				<option @if($sort=='desc') selected @endif value="desc">
					по убыванию
				</option>
				<option @if($sort=='asc') selected @endif value="asc">
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
<form action="" method="get" class="card">
	<div class="card-header h6 text-secondary">Статус:</div>
	<div class="card-body">
		<select name="filter[status]" class="form-select">
			@foreach(Config::get('constants.order_statuses') as $key => $value)
			<option @if((int)$filterStatus->__toString()==$key) selected @endif value="{{$key}}">
				{{$value['title']}}
			</option>
			@endforeach
		</select>
	</div>
	<div class="card-header h6 border-top text-secondary">
		Период:
	</div>
	<div class="card-body">
		<div class="row">
			<div class="col-4">
				с:
			</div>
			<div class="col-8">
				<input name="filter[date_from]" @if($dateFrom)value="{{$dateFrom}}"@endif type="text" class="form-control sidebar-filter-datepicker">
			</div>
		</div>
		<div class="row pt-1">
			<div class="col-4">
				по:
			</div>
			<div class="col-8">
				<input name="filter[date_to]" @if($dateFrom)value="{{$dateTo}}"@endif type="text" class="form-control sidebar-filter-datepicker">
			</div>			
		</div>
	</div>
	<hr>
	<div class="card-body">
		<button class="btn btn-outline-primary w-100">
			<i class="fa fa-filter" aria-hidden="true"></i>
			Фильтр
		</button>
	</div>
</form>

<script>
	$( function() {
		$('.sidebar-filter-datepicker').datepicker({
			dateFormat: "yy-mm-dd"
		});
	} );
</script>