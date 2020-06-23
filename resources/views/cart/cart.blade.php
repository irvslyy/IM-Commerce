@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Cart detail</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                		<a class="list-icons-item" data-action="reload"></a>
		                		<a class="list-icons-item" data-action="remove"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						
					</div>

					<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>items code</th>
								<th>product code</th>
								<th>product name</th>
								<th>qty</th>
								<th>unit</th>
								<th>serial number</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<a href="#" class="dropdown-item"><i class="icon-file-pdf"></i> Export to .pdf</a>
												<a href="#" class="dropdown-item"><i class="icon-file-excel"></i> Export to .csv</a>
												<a href="#" class="dropdown-item"><i class="icon-file-word"></i> Export to .doc</a>
											</div>
										</div>
									</div>
								</td>
							</tr>
							
						</tbody>	
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