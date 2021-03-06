@extends('layouts.app')

@section('content')

<div class="container">
	<div class="row mt-3">
		<div class="col-md-5">
				<!-- User card -->
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Account</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                              
                            </div>
                        </div>
                    </div>
					<div class="card-body justify-content-center">
						<div class="text-center">
							<div class="card-img-actions d-inline-block mb-3 ">
								<img class="img-fluid rounded-circle text-center" src="{{asset('/aset/images/placeholders/placeholder.jpg')}}" width="170" height="170" alt="">
								<div class="card-img-actions-overlay card-img rounded-circle text-center">
									<a href="#" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round">
										<i class="icon-plus3"></i>
									</a>
									<a href="user_pages_profile.html" class="btn btn-outline bg-white text-white border-white border-2 btn-icon rounded-round ml-2">
										<i class="icon-link"></i>
									</a>
								</div>
							</div>
						</div>

						<h6 class="font-weight-semibold mb-0 text-center">name</h6>
						<span class="d-block text-muted text-center"></span>
						
						<hr>
						<table class="table table-striped">
							<tr>
								<td><b>NAMA</b></td>
								<td id="nama"></td>
							</tr>
							<tr>
								<td><b>GENDER</b></td>
								<td id="gender"></td>
							</tr>
							<tr>
								<td><b>MARITAL STATUS</b></td>
								<td id="marital"></td>
							</tr>
							<tr>
								<td><b>AGAMA</b></td>
								<td id="agama"></td>
							</tr>
							<tr>
								<td><b>TEMPAT LAHR</b></td>
								<td id="tempatlahir"></td>
							</tr>
							<tr>
								<td><b>TANGGAL LAHIR</b></td>
								<td id="tanggallahir"></td>
							</tr>
							<tr>
								<td><b>GOL DARAH</b></td>
								<td id="goldar"></td>
							</tr>
							<tr>
								<td><b>KENEGARAAN</b></td>
								<td id="kenegaraan"></td>
							</tr>
							<tr>
								<td><b>TELEPON RUMAH</b></td>
								<td id="telpon_rumah"></td>
							</tr>
							<tr>
								<td><b>NOMOR HANDPHONE</b></td>
								<td id="nomor_hp"></td>
							</tr>
						</table>
					</div>
				</div>
				<!-- /user card -->

		</div>
		<div class="col-md-7">
			<!-- Default ordering -->
				<div class="card">
					<div class="card-header bg-white header-elements-inline">
                        <h6 class="card-title">Detail</h6>
                        <div class="header-elements">
                            <div class="list-icons">
                              
                            </div>
                        </div>
                    </div>

					<div class="card-body">
						<div class="row">
							<div clas=col-md-12>
								<h2 id="#nama"></h2>
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
	<script src="{{asset('js/profile.js')}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.7.9/angular.min.js"></script>
	<script>
		// let object = [];
		// let nama = document.getElementById('nama').value;
		// let gender = document.getElementById('gender').value;
		// let marital = document.getElementById('marital').value;
		// $(document).ready(function()
		
		var Profile  = Array([0]);
		$(document.ready(function () {
			$.get(url,function (response) {
				response.forEach(function(data) {
					Profile.push(data.nama);
					Profile.push(data.gender);
					Profile.push(data.marital);
					Profile.push(data.agama);
					Profile.push(data.tempatlahir);
					Profile.push(data.tanggallahir);
					Profile.push(data.goldar);
					Profile.push(data.kenegaraan);
					Profile.push(data.telpon_rumah);
					Profile.push(data.nomor_hp);
				});
			});
		}));


	</script>
@endsection



