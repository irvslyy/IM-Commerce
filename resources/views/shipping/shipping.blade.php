@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Shipping</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<!-- <form action="{{route('shipping.export')}}" method="GET">
							@CSRF

						</form> -->
						<button type="submit" class="btn btn-warning">export excel</button>
						<button type="submit" class="btn btn-primary">export excel</button>
					</div>

					<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>id</th>
								<th>shipping number</th>
								<th>req_code</th>
								<th>gerf_number</th>
								<th>create_date</th>
								<th>status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						@foreach($shipping as $ship)
						<tbody>
							<tr>
								<td>{{$ship->id}}</td>
								<td>{{$ship->shipping_number}}</td>
								<td>{{$ship->req_code}}</td>
								<td>{{$ship->gerf_number}}</td>
								<td>{{$ship->create_date}}</td>
								<td>{{$ship->status}}</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="{{route('shipping.destroy',$ship->id)}}" class="dropdown-item"><i class="icon-file-pdf"></i> Delete</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Update</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
						@endforeach
					</table>
				</div>
				<!-- /default ordering -->

		</div>
	</div>
</div>

@endsection

@section('script')
    <script src="{{asset('js/datatables.min.js')}}"></script>
    <script src="{{asset('js/datatables_sorting.js')}}"></script>
@endsection