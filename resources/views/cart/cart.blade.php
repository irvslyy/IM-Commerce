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
		                	</div>
	                	</div>
					</div>

					<div class="card-body">
						<table class="table datatable-sorting">
						<thead>
							<tr>
							 @if(Cart::count() <= 0)
							 	<p>kosong</p>

							 	
							 @else
							   @foreach(Cart::content() as $items)
							 	<th>
									<h6 class="media-title font-weight-semibold">
										<a href="http://localhost:8000/cart/show/item/196">{{$items->name}}</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">satuan</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Kabel</a></li>
									</ul>

									<p class="mb-3"></p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">WH-001 <a href="#">Aloha</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								  @endforeach
								</th>
							 @endif
								
							</tr>
						</thead>
					</table><br>
					<form>
						<button type="submit" class="btn btn-warning">request</button>
					</form>	
						
					</div>

					
					
				</div>
				<!-- /default ordering -->
		</div>
	</div>
</div>
@endsection

@section('script')

@endsection