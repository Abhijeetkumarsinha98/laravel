<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Login Page" />
	<title>Login </title>
	<!-- google font -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
		type="text/css" />
	<!-- icons -->
	<link href="{{asset('/themes/bs4fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="{{asset('/themes/bs4/plugins/iconic/css/material-design-iconic-font.min.css')}}">
	<!-- bootstrap -->
	<link href="{{asset('/themes/bs4/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
	<!-- style -->
	<link rel="stylesheet" href="{{asset('/themes/bs4/css/pages/extra_pages.css')}}">
	<!-- favicon -->
	<link rel="shortcut icon" href="{{(isset($app_details->favicon_icon))? $app_details->favicon_icon : ''}}" />
	<style type="text/css">
		.wrap-input100 {
			margin: 20px 0px 0px 0px;
			margin-bottom: 0px;
		}

		.wrap-input100-error {
			color: red;
		}

		.or {

			width: 100%;
			position: relative;
			border-bottom: 1px solid #ddd;
			max-width: 275px;
			margin: 0 auto;
			padding: 5px 0 7px;
			margin-bottom: 20px;
		}

		.or span {
			position: absolute;
			background: #1781f3;
			left: 0;
			right: 0;
			margin: 0 auto;
			width: 55px;
			text-align: center;
			padding: 0 10px;
			color: #fff;
			top: 0;
		}
	</style>
</head>

<body>
	<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
				<div class="alert alert-success d-none" id="msg_div">
					<span id="res_message"></span>
				</div>
				@if (session('error'))
				<div class="alert alert-danger">
					<strong>{{session('error')}}</strong>
				</div>
				@endif

				@if (session('status'))
				<div class="alert alert-success">
					<strong>{{session('status')}}</strong>
				</div>
				@endif
				@if (Session::has('already_loggedin'))
				<div class="alert alert-danger logout_hide">
					{{ Session::get('already_loggedin') }}
					<br>
					<center>
						<button style="align: center;" id="send_form" type="button"
							class="btn btn-danger jaybutton signout_button">Logout</button>
					</center>
				</div>
				@endif
				<center>
				</center>
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
					<span class="login100-form-title p-b-34 p-t-27">
						Log in

					</span>

					<div class="wrap-input100 validate-input" data-validate="Enter Email">
						<input class="input100 {{ $errors->has('email') ? ' is-invalid' : '' }}" type="email"
							name="email" placeholder="Email" required autofocus>
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100-error">
						@if ($errors->has('email'))
						<span class="help-block"><strong>{{ $errors->first('email') }}</strong></span>
						@endif
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100 {{ $errors->has('password') ? ' is-invalid' : '' }}" type="password"
							name="password" id="password" required placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="wrap-input100-error">
						@if ($errors->has('password'))
						<span class="help-block"><strong>{{ $errors->first('password') }}</strong></span>
						@endif
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember" {{ old('remember')
							? 'checked' : '' }}>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- start js include path -->
	<script src="{{asset('themes/bs4/plugins/jquery/jquery.min.js')}}"></script>
	<!-- bootstrap -->
	<script src="{{asset('themes/bs4plugins/bootstrap/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('themes/bs4/js/pages/extra-pages/pages.js')}}"></script>
	<!-- end js include path -->
</body>

</html>