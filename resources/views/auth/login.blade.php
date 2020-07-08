
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>IM</title>

	<!-- Global stylesheets -->
    <link rel="stylesheet" href="{{asset('aset/css/icons/icomoon/styles.css')}}">
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/bootstrap_limitless.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/layout.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/components.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('aset/css/colors.min.css')}}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

</head>

<body>

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				 <form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
							<img src="{{asset('/aset/images/logo_im.png/')}}" width="100%">
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" autofocus placeholder="enter email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>

								@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="enter password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>

								@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<div class="captcha">
								<span width="50%">{!! captcha_img() !!}</span>
									<button type="button" class="btn btn-success" id="refresh"><i class="icon-lock" ></i></button>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
								<div class="form-control-feedback">
									<i class="icon-dots text-muted"></i>
								</div>
							</div>
							

							<div class="form-group">
								<button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
							</div>
							
						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->


		  <!-- Core JS files -->
<script src="{{asset('aset/js/main/jquery.min.js')}}"></script>
	<script src="{{asset('aset/js/main/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('aset/js/main/app.js')}}"></script>

	<!-- /core JS files -->
	<!-- Theme JS files -->
            <script src="{{asset('aset/js/plugins/visualization/d3/d3.min.js')}}"></script>
            <script src="{{asset('aset/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
            <script src="{{asset('aset/js/plugins/forms/styling/switchery.min.js')}}"></script>
            <script src="{{asset('aset/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
            <script src="{{asset('aset/js/plugins/ui/moment/moment.min.js')}}"></script>
            <script src="{{asset('aset/js/plugins/pickers/daterangepicker.js')}}"></script>
            <script src="{{asset('aset/js/demo_pages/dashboard.js')}}"></script>
	<!-- /theme JS files -->
	<script>
		$('#refresh').click(function(){
			$.ajax({
				type:'GET',
				url:'{{route('captcha')}}',
				success:function(data){
					$(".captcha span").html(data.captcha);
				}
			});
		});
	</script>
</body>
</html>