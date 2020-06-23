@extends('layouts.app')
@section('content')

	<!-- Content area -->
			<div class="content">

				<!-- Inner container -->
				<div class="d-flex align-items-start flex-column flex-md-row">
					
					<!-- Left content -->
					<div class="w-100 overflow-auto order-2 order-md-1">
						@foreach($items as $item)
						<!-- List -->
						<div class="card card-body">
							<div class="media align-items-center align-items-lg-start text-center text-lg-left flex-column flex-lg-row">
								<div class="mr-lg-3 mb-3 mb-lg-0">
									<a href="../../../../global_assets/images/placeholders/placeholder.jpg" data-popup="lightbox">
										<img src="../../../../global_assets/images/placeholders/placeholder.jpg" width="96" alt="">
									</a>
								</div>

								<div class="media-body">
									<h6 class="media-title font-weight-semibold">
										<a href="#">{{$item->product_name}}</a>
									</h6>

									<ul class="list-inline list-inline-dotted mb-3 mb-lg-2">
										<li class="list-inline-item"><a href="#" class="text-muted">Fashion</a></li>
										<li class="list-inline-item"><a href="#" class="text-muted">Men's Accessories</a></li>
									</ul>

									<p class="mb-3"></p>

									<ul class="list-inline list-inline-dotted mb-0">
										<li class="list-inline-item">All items from <a href="#">Aloha</a></li>
										<li class="list-inline-item">Add to <a href="#">wishlist</a></li>
									</ul>
								</div>

								<div class="mt-3 mt-lg-0 ml-lg-3 text-center">
									<div class="text-muted">0 requester</div>
									<form action="{{route('cart.post')}}" method="post">
										@CSRF
										<button type="submit" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
<!-- 										<a href="" class="btn bg-teal-400 mt-3"><i class="icon-collaboration"></i>Request</a>
 -->									</form>
									
									<!-- <button type="button" class="btn bg-teal-400 mt-3"><i class="icon-cart-add mr-2"></i> Add to cart</button>
                                    <button type="button" class="btn bg-teal-400 mt-3"><i class="icon-collaboration"></i> Request</button> -->
								</div>
							</div>
						</div>
						<!-- /list -->
						@endforeach
						{{$items->links()}}
					</div>
					<!-- /left content -->


					<!-- Right sidebar component -->
					<div class="sidebar sidebar-light bg-transparent sidebar-component sidebar-component-right border-0 shadow-0 order-1 order-md-2 sidebar-expand-md">

						<!-- Sidebar content -->
						<div class="sidebar-content">

							<!-- Categories -->
							<div class="card">
								<div class="card-header bg-transparent header-elements-inline">
									<span class="text-uppercase font-size-sm font-weight-semibold">Categories</span>
									<div class="header-elements">
										<div class="list-icons">
					                		<a class="list-icons-item" data-action="collapse"></a>
				                		</div>
			                		</div>
								</div>

								<div class="card-body">
									<form action="#">
										<div class="form-group form-group-feedback form-group-feedback-right">
											<input type="search" class="form-control" placeholder="Search">
											<div class="form-control-feedback">
												<i class="icon-search4 font-size-base text-muted"></i>
											</div>
										</div>
									</form>
								</div>

								<div class="card-body border-0 p-0">
									<ul class="nav nav-sidebar mb-2">
										<li class="nav-item nav-item-submenu nav-item-expanded nav-item-open">
											<a href="#" class="nav-link">CATEGORIES</a>
											<ul class="nav nav-group-sub">
												<li class="nav-item"><a href="#" class="nav-link"></a></li>
											</ul>
										</li>
									</ul>
								</div>
							</div>
							<!-- /categories -->


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



@endsection