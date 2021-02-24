<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta name="description" content="Responsive Admin Template" />
    <meta name="author" content="SmartUniversity" />
    <title>Undangan Pernikahan Admin</title>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
    <link href="{{asset('template_admin')}}/Html/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="{{asset('template_admin')}}/assets/plugins/iconic/css/material-design-iconic-font.min.css">
    <!-- bootstrap -->
	<link href="{{asset('template_admin')}}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- style -->
    <link rel="stylesheet" href="{{asset('template_admin')}}/assets/css/pages/extra_pages.css">
	<!-- favicon -->
    <link rel="shortcut icon" href="{{asset('template_admin')}}/assets/img/favicon.ico" /> 
</head>
<body>
    <div class="limiter">
		<div class="container-login100 page-background">
			<div class="" style="background-color: rgba(0, 0, 0, 0.5);width:30%;padding:50px 50px">
				<form class="login100-form validate-form" action="{{route('Login')}}" method="post">
					@csrf
					<span class="login100-form-logo">
						<img alt="" src="{{asset('template_admin')}}/assets/img/taxi.png">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Remember me
						</label>
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
    <script src="{{asset('template_admin')}}/assets/plugins/jquery/jquery.min.js" ></script>
    <!-- bootstrap -->
    <script src="{{asset('template_admin')}}/assets/plugins/bootstrap/js/bootstrap.min.js" ></script>
    <script src="{{asset('template_admin')}}/assets/js/pages/extra_pages/login.js" ></script>
    <!-- end js include path -->
</body>
</html>