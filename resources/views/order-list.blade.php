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
					<div class="p-2">
						<a href="#" class="row smart_link text-body pt-3 pb-2 bg-white">
							<div class="col-12 h5 text-success">
								{{$value['title']}}
							</div>
							<span class="col-12 pb-2">
								{{Str::of($value['content'])->substr(50)}} 
								<span class="text-primary">...</span>
							</span>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<b class="text-secondary">Заказчик:</b>
								<span>{{$value['customer']}}</span><br>
								<span>{{$value['customer_email']}}</span>
								<span>{{$value['customer_phone']}}</span>
								<div class="alert alert-{{$value['status_color']}} p-1 mt-2">
									<span class="text-{{$value['status_color']}}">
									<i class="fa fa-circle" aria-hidden="true"></i>
								</span>
								{{$value['status_name']}}
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12">
								<b class="text-secondary">Подрядчик (исполнитель):</b>
								<span>{{$value['contractor']['name']}}</span>
								<span>{{$value['contractor']['email']}}</span>
								<br>
								<b class="text-secondary">Менеджер:</b>
								<span>{{$value['manager']['name']}}</span>
								<span>{{$value['manager']['email']}}</span>
							</div>
						</a>
					</div>
					
					@endforeach
				</div>
			</div>

		</div>
	</div>
	

</x-layout>

