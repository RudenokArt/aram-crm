<x-layout>
	<div class="bg-light">
		<div class="container pt-5 pb-5">
			<div class="row">
				<div class="col-12 text-end">
					<a href="#" id="order_list-sidebar_trigger" class="d-block d-lg-none d-sm-none smart_link">
						Фильтр
						<i class="fa fa-chevron-down" aria-hidden="true"></i>
					</a>
				</div>
			</div>
			<div class="row">
				<div id="order_list-sidebar" class="col-lg-3 col-md-4 col-sm-12 order_list-sidebar">
					<x-order-list.sidebar>
						<x-slot name="order">{{$orderBy['order']}}</x-slot>
						<x-slot name="sort">{{$orderBy['sort']}}</x-slot>
						<x-slot name="filterStatus">{{$filter['status']}}</x-slot>
						<x-slot name="dateFrom">{{$filter['date_from']}}</x-slot>
						<x-slot name="dateTo">{{$filter['date_to']}}</x-slot>
					</x-order-list.sidebar>
				</div>
				<div class="col-lg-9 col-md-8 col-sm-12">

					<form action="" method="get" class="input-group mb-3">
						<input name="orderListSearch" value="{{$search}}" required type="text" class="form-control">
						<button class="input-group-text text-secondary" id="basic-addon2">
							<i class="fa fa-search" aria-hidden="true"></i>
						</button>
						<a href="?" class="input-group-text text-secondary smart_link" id="basic-addon2">
							<i class="fa fa-times" aria-hidden="true"></i>
						</a>
					</form>

					@if(!$arOrders)
					<div class="alert alert-danger">
						По вашему запросу ничего не найдено!
					</div>
					@endif
					
					@foreach ($arOrders as $key=>$value)
					<div class="p-2">
						<a href="#" class="row smart_link text-body pt-3 pb-2 bg-white">
							<div>{{$value['created_at']}}</div>
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

					<div class="row">
						<div class="col-12">
							<nav aria-label="Page navigation example">
								<ul class="pagination">
									<li class="page-item">
										<a class="page-link" href="?{{$pagenationLinks['queryString']}}&page={{$pagenationLinks['previousPage']}}">
											<span aria-hidden="true">
												<i class="fa fa-chevron-left" aria-hidden="true"></i>
											</span>
										</a>
									</li>
									@for($i = 1; $i <= $lastPage; $i++)
									@if($i == $currentPage)
									<li class="page-item">
										<a class="page-link text-danger" href="?{{$pagenationLinks['queryString']}}&page={{$i}}">
											{{$i}}
										</a>
									</li>
									@elseif($i>($currentPage-3)	and	$i<($currentPage+3))
									<li class="page-item">
										<a class="page-link" href="?{{$pagenationLinks['queryString']}}&page={{$i}}">
											{{$i}}
										</a>
									</li>
									@elseif($i==1)
									<li class="page-item">
										<a class="page-link" href="?{{$pagenationLinks['queryString']}}&page={{$i}}">
											{{$i}}
											<i class="fa fa-angle-double-left" aria-hidden="true"></i>
										</a>
									</li>
									@elseif($i==$lastPage)
									<li class="page-item">
										<a class="page-link" href="?{{$pagenationLinks['queryString']}}&page={{$i}}">
											<i class="fa fa-angle-double-right" aria-hidden="true"></i>
											{{$i}}
										</a>
									</li>
									@endif
									@endfor

									<li class="page-item">
										<a class="page-link" href="?{{$pagenationLinks['queryString']}}&page={{$pagenationLinks['nextPage']}}">
											<span aria-hidden="true">
												<i class="fa fa-chevron-right" aria-hidden="true"></i>
											</span>
										</a>
									</li>

								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>


</x-layout>

<script>
	$(function() {
		console.log('order_list-sidebar_trigger');
		$('#order_list-sidebar_trigger').click(function() {
			$('#order_list-sidebar').slideToggle();
		});
	});
</script>