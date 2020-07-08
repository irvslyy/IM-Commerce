@extends('layouts.app')
@section('content')

	<!-- Content area -->
			<div class="content">

				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row">
					
					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1" ng-repeat"u in users">
						@foreach($items as $item)
						<!-- List -->
						<div class="card card-body" ng-App="myApp" ng-controller="Usersku">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="{{route('cart.showItem',$item->id)}}">{{$item->product_name}}</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Product code : {{$item->product_code}} </a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Kabel</a></li>
									</ul>

									<p class="mb-3"></p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">WH-001 <a href="#">Aloha</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<div class="text-muted">0 requester</div>
									
								</div>
							</div>
						</div>
						<!-- /list -->
						@endforeach
					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Filters -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Filter products</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group">
											<div class="form-group form-group-feedback form-group-feedback-left">
												<input type="search" class="form-control" placeholder="Search brand">
												<div class="form-control-feedback">
													<i class="icon-search4 font-size-base text-muted"></i>
												</div>
											</div>
										</div>

										<div class="form-group">
											<div class="font-size-xs text-uppercase text-muted mb-3">Items for</div>

											<div class="form-check">
												<label class="form-check-label">
													<input type="checkbox" class="form-input-styled" data-focus>
													Kabel
												</label>	
											</div>

										</div>

										<button type="submit" class="btn bg-blue btn-block">Filter</button>
									</form>
								</div>
							</div>
							<!-- /filters -->

						</div>
						<!-- /sidebar content -->

					</div>
					<!-- /right sidebar component -->

				</div>
				<!-- /inner container -->

			</div>
			<!-- /content area -->


@endsection

@section('script')
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.0/angular.min.js"></script>
<script type="text/javascript">

	var app = angular.module('ConsumeWH', []);

	app.controller('users',function ($cope, $http) {
		$http.get("https://jsonplaceholder.typicode.com/posts/1").then(function ($response) {
			$scope.kotak  response.data.usersnya;
		});z
	})


</script>

@endsection




