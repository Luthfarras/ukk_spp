<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login E SPP</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/linearicons/style.css')}}">
	<link rel="stylesheet" href="{{asset('vendor/toastr/toastr.min.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/bike.png')}}">
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('img/bike.png')}}">
</head>

<body>
	@if(Session::has('message'))
	<div id="toastr-demo">
		<div id="toast-container" class="toast-top-right">
			<div class="toast toast-error">
				<button type="button" class="toast-close-button" role="button">×</button>
				<div class="toast-message">{{Session('message')}}
				</div>
			</div>
		</div>
	</div>
	@endif

	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center"><img src="{{asset('img/pay2.png')}}" alt="Klorofil Logo" width="120px" height="45px"></div>
								<p class="lead">Login to your account</p>
							</div>
                <form class="form-auth-small" action="{{ url('login/siswa/proses') }}" method="post">
                  @csrf
								<div class="form-group">
									<input name="nisn" type="text"  class="form-control" placeholder="NISN" required>
									@error('nisn')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
								<div class="form-group">
									<input id="nama_siswa" name="nama_siswa" type="text" class="form-control" placeholder="Nama" required>
									@error('nama_siswa')
											<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
											</span>
									@enderror
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>
								<div class="bottom">
									<span class="helper-text"> <a href="login">Login Petugas</a></span>
								</div>
							</form>
						</div>
					</div>
					<div class="right" style="background-image: url('{{ asset('img/pay1.png')}}');">
						<div class="overlay"></div>
						<div class="content text">
							<h1 class="heading">E-SPPPay</h1>
							<p>Make You Easier to Pay</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->

	<!-- Javascript -->
	<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
	<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('vendor/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
	<script src="{{asset('vendor/toastr/toastr.min.js')}}"></script>
	<script src="{{asset('scripts/klorofil-common.js')}}"></script>
</body>

</html>
