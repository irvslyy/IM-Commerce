@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Items</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                              <!-- <a class="list-icons-item" data-action="collapse"></a> -->
                            </div>
                        </div>
                    </div>

					<div class="card-body">
						<div class="row">
							<div class="col-md-6">
								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="">{{$showItems->product_name}}</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Product code :{{$showItems->product_code}}</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Kabel</a></li>
									</ul>

									<p class="mb-3"></p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">WH-001 <a href="#">Aloha</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>
									<div class="text-muted">0 requester</div>
									<form action="{{route('cart.post')}}" method="post">
										@CSRF
										<button type="submit" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
									</form>
							</div>
							<div class="col-md-6">
								
							</div>
						</div>
						
					</div>
					
					
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