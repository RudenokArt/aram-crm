<x-layout>
	<div class="bg-light">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-lg-3 col-md-4 col-sm-12">
					<div class="card">
						<div class="card-header h6">Категория:</div>
						<div class="card-body">
							<form action="">
								<select class="form-select">
									<option value="">Модульные картины</option>
									<option value="">Фотообои</option>
									<option value="">Натяжные потолки</option>
								</select>
							</form>
						</div>
						<div class="card-header h6 border-top">
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

				</div>
				<div class="col-lg-9 col-md-8 col-sm-12">
					@foreach ($arOrders as $key=>$value)
					<a href="#" class="bg-{{$value['status_color']}} row smart_link text-body border-bottom pt-1 pb-1">
						<div class="col-lg-3 col-md-6 col-sm-12">
							<b>Зазказ № {{$value['id']}}</b>
							<br>{{$value['title']}}
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<b>Заказчик:</b>
							<br>{{$value['customer']}}
							<br>{{$value['customer_email']}}
							<br>{{$value['customer_phone']}}
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<b>Подрядчик (исполнитель):</b>
							<br>{{$value['contractor']['name']}}
							<br>{{$value['contractor']['email']}}
							<br>{{$value['status_name']}}
						</div>
						<div class="col-lg-3 col-md-6 col-sm-12">
							<b>Менеджер:</b>
							<br>{{$value['manager']['name']}}
							<br>{{$value['manager']['email']}}
						</div>
					</a>
					@endforeach
				</div>
			</div>

		</div>
	</div>
	

</x-layout>

