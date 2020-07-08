@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Cart Detail</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                              <!-- <a class="list-icons-item" data-action="collapse"></a> -->
                            </div>
                        </div>
                    </div>

					<div class="card-body">
						
							 @if(Cart::count() <= 0)
							 <div class="alert alert-warning">Tidak ada barang dalam cart</div>
							 @else
								@foreach(Cart::content() as $items)
									 <div class="row">
									 	<div class="col-md-12">
									 		<h6 class="media-title font-weight-semibold">
												<a href="http://localhost:8000/cart/show/item/196">{{$items->name}}</a>
											</h6>

											<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
												<li class="list-inline-item"><a href="#" class="text-muted">{{$items->size}}</a></li>
												<li class="list-inline-item"><a href="#" class="text-muted">Kabel</a></li>
												</ul>

												<p class="mb-3"></p>

											<ul class="list-inline list-inline-dotted mb-0">
												<li class="list-inline-item">WH-001 <a href="#">Aloha</a></li>
												<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
											</ul>
									 	</div>
									 </div>
									 <hr>

									 <div class="modal fade" id="requestModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			                                <div class="modal-dialog" role="document">
			                                    <div class="modal-content">
			                                    <div class="modal-header">
			                                        <h5 class="modal-title" id="exampleModalLabel">Request Items</h5>
			                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
			                                        <span aria-hidden="true">&times;</span>
			                                        </button>
			                                    </div>
			                                    <div class="modal-body">
			                                        <form action="" method="POST">
			                                        	@CSRF
			                                        	<div class="row">
			                                        		<div class="col-md-6">
			                                        			<label>Product name</label>
			                                        			<input type="text" class="form-control" name="cod_code" value="{{$items->name}}" disabled="disabled">
			                                        		</div>
			                                        		<div class="col-md-6">
			                                        			<label>Product code</label>
			                                        			<input type="text" class="form-control" name="request_code" value="{{$items->product_code}}" disabled="disabled">
			                                        		</div>
			                                        	</div>
			                                        	<div class="row mt-1">
			                                        		<div class="col-md-6">
			                                        			<label>qty</label>
			                                        			<input type="text" class="form-control" name="qty" value="{{$items->qty}}" disabled="disabled" >
			                                        		</div>
			                                        	</div>
			                                    </div>
			                                    <div class="modal-footer">
			                                        	<button type="button" class="btn btn-secondary" data-dismiss="modal">tutup</button>
			                                         	<button type="submit" class="btn btn-primary">Request</button>
			                                        </form>
			                                    </div>
			                                    </div>
			                                </div>
			                            </div>
							 	@endforeach
							 @endif

							<button type="submit" class="btn btn-warning" data-toggle="modal" data-target="#requestModal"><i class="icon-rotate-cw"></i> Request</button>
					</div>
					
				</div>
				<!-- /default ordering -->
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection


