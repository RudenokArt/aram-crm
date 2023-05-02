<x-layout>
	<div class="container pt-5 pb-5">
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

</x-layout>

