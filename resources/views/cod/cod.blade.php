@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
						<h6 class="card-title">Cash on delivery</h6>
						<div class="header-elements">
							<div class="list-icons">
				              <!-- <a class="list-icons-item" data-action="collapse"></a> -->
				            </div>
			            </div>
					</div>

					<div class="card-body">
						<a href="{{route('cod.export')}}" class="btn btn-warning">export excel</a>
					</div>

					<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>id</th>
								<th>cod code</th>
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
												<button type="submit" class="dropdown-item" data-toggle="modal" data-target="#updateModal"><i class="icon-pencil"></i> update</button>
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
                            <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">update</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="{{route('cod.update',$cods->id)}}" method="POST">
                                        	@CSRF
                                        	<div class="row">
                                        		<div class="col-md-6">
                                        			<label>COD Code</label>
                                        			<input type="text" class="form-control" name="cod_code" value="{{$cods->cod_code}}">
                                        		</div>
                                        		<div class="col-md-6">
                                        			<label>Request Code</label>
                                        			<input type="text" class="form-control" name="request_code" value="{{$cods->request_code}}">
                                        		</div>
                                        	</div>
                                        	<div class="row">
                                        		<div class="col-md-6">
                                        			<label>Grf Number</label>
                                        			<input type="text" class="form-control" name="grf_number" value="{{$cods->grf_number}}">
                                        		</div>
                                        		<div class="col-md-6">
                                        			<label>status</label>
                                        			<input type="text" class="form-control" name="status" value="{{$cods->status}}">
                                        		</div>
                                        	</div>
                                    </div>
                                    <div class="modal-footer">
                                        	<button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
                                         	<button type="submit" class="btn btn-primary">update</button>
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