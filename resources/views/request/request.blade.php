@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-12">
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Logistic</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                              <!-- <a class="list-icons-item" data-action="collapse"></a> -->
                            </div>
                        </div>
                    </div>

					<div class="card-body">
						<a href="{{route('shipping.export')}}" class="btn btn-warning"> export excel</a>
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
