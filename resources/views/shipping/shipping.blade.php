@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Shipping</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                              <!-- <a class="list-icons-item" data-action="collapse"></a> -->
                            </div>
                        </div>
                    </div>

					<div class="card-body">
						<a href="{{route('shipping.export')}}" class="btn btn-warning"> export excel</a>
					</div>

					<table class="table datatable-sorting">
						<thead>
							<tr>
								<th>id</th>
								<th>shipping number</th>
								<th>request code</th>
								<th>grf number</th>
								<th>created at</th>
								<th>status</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						@foreach($shipping as $ship)
						<tbody>
							<tr>
								<td>{{$ship->id}}</td>
								<td>{{$ship->shipping_number ?? 'NULL'}}</td>
								<td>{{$ship->req_code ?? 'NULL'}}</td>
								<td>{{$ship->gerf_number ?? 'NULL'}}</td>
								<td>{{$ship->created_at ?? 'NULL'}}</td>
								<td>{{$ship->status ?? 'NULL'}}</td>
								<td class="text-center">
									<div class="list-icons">
										<div class="dropdown">
											<a href="#" class="list-icons-item" data-toggle="dropdown">
												<i class="icon-menu9"></i>
											</a>

											<div class="dropdown-menu dropdown-menu-right">
												<!-- <form action="" method="POST">
													@CSRF
													@METHOD('DELETE')
													<a href="{{route('shipping.destroy',$ship->id)}}" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
													<a href="" class="dropdown-item"><i class="icon-pencil"></i> Update</a>
												</form> -->
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
                                        <form action="{{route('shipping.destroy',$ship->id)}}" method="POST">
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
                                        <form action="{{route('shipping.update',$ship->id)}}" method="POST">
                                        	@CSRF
                                        	<div class="row">
                                        		<div class="col-md-6">
                                        			<label>shipping number</label>
                                        			<input type="text" class="form-control" name="shipping_number" value="{{$ship->shipping_number}}">
                                        		</div>
                                        		<div class="col-md-6">
                                        			<label>request code</label>
                                        			<input type="text" class="form-control" name="req_code" value="{{$ship->req_code}}">
                                        		</div>
                                        	</div>
                                        	<div class="row mt-1">
                                        		<div class="col-md-6">
                                        			<label>gerf number</label>
                                        			<input type="text" class="form-control" name="gerf_number" value="{{$ship->gerf_number}}">
                                        		</div>
                                        		<div class="col-md-6">
                                        			<label>create date</label>
                                        			<input type="text" class="form-control" name="created_at" value="{{$ship->created_at}}">
                                        		</div>
                                        	</div>
                                        	<div class="row mt-1">
                                        		<div class="col-md-6">
                                        			<label>status</label>
                                        			<input type="text" class="form-control" name="status" value="{{$ship->status}}">
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