@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">Good Request Form</h5>
						<div class="header-elements">
							<div class="list-icons">
		                		<a class="list-icons-item" data-action="collapse"></a>
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<a href="{{route('grf.export')}}" class="btn btn-warning"> export excel</a>
					</div>

					<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>GRF Number</th>
                                <th>hierarky code</th>
                                <th>employee number</th>
                                <th>access code</th>
                                <th>status</th>
                                <th>create at</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						@foreach($grf as $goodReq)
						<tbody>
							<tr>
								<td>{{$goodReq->grf_number}}</td>
                                <td>{{$goodReq->heir_code}}</td>
                                <td>{{$goodReq->employee_number}}</td>
                                <td>{{$goodReq->access_code}}</td>
                                <td>{{$goodReq->status}}</td>
                                <td>{{$goodReq->created_at}}</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												
												<button type="submit" class="dropdown-item" data-toggle="modal" data-target="#deleteModal"><i class="icon-trash"></i> Delete</button>
												<button type="submit" class="dropdown-item" data-toggle="modal" data-target="#updateModal"><i class="icon-pencil"></i> Update</button>
											</div>
										</div>
									</div>
								</td>
							</tr>
						</tbody>
						<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">konfirmasi</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        yakin ingin menghapus?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
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