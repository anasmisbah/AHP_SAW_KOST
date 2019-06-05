
<!DOCTYPE html>
<html lang="en">
<head>
	<title>SPK Kost</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/animate/animate.css') }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('template/login/css/main.css') }}">
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form flex-sb flex-w">
                    @csrf
                    <span class="login100-form-title p-b-53">
						Sign Up With
					</span>

					<a href="{{ url('/auth/facebook') }}" class="btn-face m-b-20">
                        <i class="fa fa-facebook-official"></i>
                        Facebook
                      </a>
            
                      <a href="{{ url('/auth/google') }}" class="btn-google m-b-20">
                        <img src="images/icon-google.png" alt="GOOGLE">
                        Google
                      </a>
					
                      <div class="p-t-31 p-b-9">
                        <span class="txt1">
                          name
                        </span>
                      </div>
                      <div class="wrap-input100 validate-input" data-validate = "Username is required">
                        <input class="input100" type="text" name="name" required >
                        <span class="focus-input100"></span>
                      </div>
                      <div class="p-t-31 p-b-9">
                          <span class="txt1">
                            Email
                          </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Email is required">
                          <input class="input100" type="text" name="email" required>
                          <span class="focus-input100"></span>
                        </div>
                      
                      <div class="p-t-13 p-b-9">
                        <span class="txt1">
                          Password
                        </span>
            
                        <a href="#" class="txt2 bo1 m-l-5">
                          Forgot?
                        </a>
                      </div>
                      <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" required>
                        <span class="focus-input100"></span>
                      </div>
      
                      <div class="p-t-13 p-b-9">
                          <span class="txt1">
                           Confirm Password
                          </span>
                        </div>
                        <div class="wrap-input100 validate-input" data-validate = "Password is required">
                          <input class="input100" type="password" name="password_confirmation" required>
                          <span class="focus-input100"></span>
                        </div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Sign Up
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2">
							Already have an account?
						</span>

						<a href="{{ route('login') }}" class="txt2 bo1">
							Sign In now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{ asset('/template/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/template/login/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('/template/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('/template/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="{{ asset('template/login/js/main.js') }}"></script>
    <script>
        $(document).ready(function() {
           var error ="{{ $errors->first() }}";
           if (error != '') {
                    swal({
                        title: "register Failed :(",
                        text: error,
                        icon: "error",
                    });
           } 
        });
    </script>

</body>
</html>

