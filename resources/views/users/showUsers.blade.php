@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-white header-elements-inline">
              	        <h6 class="card-title">Cart</h6>
              	        <div class="header-elements">
              	            <div class="list-icons">
              	             	
              	            </div>
              	        </div>
              	    </div>

				<div class="card-body">
					@if(Cart::count() <= 0)
						<div class="row text-center justify-content-center">
							<span class="alert alert-warning">untuk saat ini cart anda kosong!</span>
						</div>

						
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
								</th>
								<hr>
								<div class="form-group">
									
								</div>
								@endforeach
					@endif
					<br>
					
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="card">
				<div class="card-header bg-white header-elements-inline">
              	        <h6 class="card-title">Wishlist</h6>
              	        <div class="header-elements">
              	            <div class="list-icons">
              	             
              	            </div>
              	        </div>
              	    </div>
              	
				<div class="card-body">
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('script')
    <script src="{{asset('js/datatables.min.js')}}"></script>
    <script src="{{asset('js/datatables_sorting.js')}}"></script>
@endsection