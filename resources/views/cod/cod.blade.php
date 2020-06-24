@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header header-elements-inline">
						<h5 class="card-title">cod</h5>
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
						<button type="submit" class="btn btn-primary">import excel</button>
					</div>

					<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>id</th>
								<th>code id</th>
								<th>request code</th>
								<th>Grf number</th>
								<th>create date</th>
								<th>status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						@foreach($cod as $cods)
						<tbody>
							<tr>
								<td>{{$cods->id}}</td>
								<td>{{$cods->cod_code ?? 'NULL'}}</td>
								<td>{{$cods->request_code ?? 'NULL'}}</td>
								<td>{{$cods->grf_number ?? 'NULL'}}</td>
								<td>{{$cods->created_at ?? 'NULL'}}</td>
								<td>{{$cods->status}}</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<button type="submit" class="dropdown-item" data-toggle="modal" data-target="#deleteModal"><i class="icon-trash"></i> delete</button>
												<button type="submit" class="dropdown-item"><i class="icon-pencil"></i> update</button>
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
                                        <form action="{{route('cod.destroy',$cods->id)}}" method="POST">
                                        @CSRF
                                            <button type="submit" class="btn btn-primary">hapus</button>
                                        </form>
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