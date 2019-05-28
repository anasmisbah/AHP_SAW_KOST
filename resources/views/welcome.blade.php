
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    
    {{-- css login --}}
    <!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="template/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="template/login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="template/login/vendor/animate/animate.css">
  <!--===============================================================================================-->	
    <link rel="stylesheet" type="text/css" href="template/login/vendor/css-hamburgers/hamburgers.min.css">
  <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="template/login/vendor/animsition/css/animsition.min.css">
  <!--===============================================================================================-->
 

    <!-- CSS saya -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="template/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="template/login/css/main.css">

    <title>SISTEM PENENTU KEPUTUSAN</title>
  </head>
  <body>

    <!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">TENOS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link active" href="#">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#" tabindex="-1" aria-disabled="true">About</a>

            
                @auth
                    @if (Auth::user()->role == "admin")
                    @endif
                @else
                    <button type="submit" class="btn btn-info tombol">
                        <a class="nav-item btn btn-info tombol" onclick="document.getElementById('id01').style.display='block'" tabindex="-1" aria-disabled="true">Sign In</a>
                        <a class="nav-item btn btn-info tombol" onclick="document.getElementById('id02').style.display='block'" tabindex="-1" aria-disabled="true">Sign Up</a>
                    </button>
                @endauth
            
            <!-- <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button> -->

          </div>
    </div>

</nav>


    <!-- Akhir Navbar -->




      <!-- Jumbotron -->

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h3 class="display-4">SISTEM PENDUKUNG KEPUTUSAN PEMILIHAN KOST DI SAMARINDA</h3>
          <a class="btn btn-info tombol text-white" onclick="document.getElementById('id01').style.display='block'">Yuk! Mulai</a>

        </div>
      </div>

      <!-- Akhir JumboTrin -->




      <!-- Container Content -->
      <div class="container">

        <!-- info panel -->
        <div class="row justify-content-center">
          <div class="col-10 info-panel ">
            <div class="row">

              <div class="col-lg">
                <img src="images/harga.png" alt="float-left" class="float-left">
                <h4> Harga</h4>
                <p>kost dengan berbagai macam penawaran mulai dari termurah hingga termahal</p>
              </div>

              <div class="col-lg">
                    <img src="images/jarak.png" alt="" class="float-left">
                    <h4>Jarak</h4>
                    <p>Jarak tempuh menuju universitas terdekat</p>
                  </div>
                  <div class="col-lg">
                    <img src="images/fasilitas.png" alt="" class="float-left">
                    <h4> Fasilitas</h4>
                    <p>Lengkap, cukup dan kurang semua dapat ditemukan</p>
                  </div>
                  

            </div>

          </div>
        </div>

        <!-- akhir info panel -->

        <!-- Workingspace  -->
        <div class="row Workingspace">
          <div class="col-lg-6">
            <img src="images/about.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-5">
            <h3>Merasakan <span>KENYAMANAN</span> seperti tinggal <span>DIRUMAH</span></h3>
          </div>
        </div>



<!--Akhir Workingspace  -->


<!-- Nama Kelompol  -->
<section class="kelompok">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <h5>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
    </div>
  </div>

  <div class="row justify-content-center">
      <div class="col-6 justify-content-center d-flex">

        <figure class="figure">
  <img src="images/avatarang.png" class="figure-img img-fluid rounded-circle" alt="kelompok1">
  <figcaption class="figure-caption">
    <h5>Anas</h5>
    <p>NIM</p>
  </figcaption>
</figure>

        <figure class="figure">
  <img src="images/avatarang.png" class="figure-img img-fluid rounded-circle" alt="kelompok2">
  <figcaption class="figure-caption">
    <h5>Octafian</h5>
    <p>NIM</p>
  </figcaption>
</figure>

        <figure class="figure">
  <img src="images/avatarang.png" class="figure-img img-fluid rounded-circle" alt="kelompok2">
  <figcaption class="figure-caption">
    <h5>Soleha</h5>
    <p>NIM</p>
  </figcaption>
</figure>

        <figure class="figure">
  <img src="images/avatarang.png" class="figure-img img-fluid rounded-circle" alt="kelompok2">
  <figcaption class="figure-caption">
    <h5>Asrah</h5>
    <p>NIM</p>
  </figcaption>
</figure>
      </div>
  </div>
</section>


<!--Akhir Nama Kelompol  -->



      </div>




      <!--Akhir Container Content -->





      <!-- Login Form Modal -->

    <div id="id01" class="modal">
        <div class="row justify-content-center">
                    <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33 animate">
                        <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
                        <form class="login100-form validate-form flex-sb flex-w animate" method="POST" action="{{ route('login') }}">
                          @csrf
                          <span class="login100-form-title p-b-53">
                            
                            Sign In With
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
                              Email
                            </span>
                          </div>
                          <div class="wrap-input100 validate-input" data-validate = "Email is required">
                            <input class="input100 login-input" type="email" name="email" >
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
                            <input class="input100 login-input" type="password" name="password" >
                            <span class="focus-input100"></span>
                          </div>
                
                          <div class="container-login100-form-btn m-t-17">
                            <button class="login100-form-btn" type="submit">
                              Sign In
                            </button>
                          </div>
                
                          <div class="w-full text-center p-t-55">
                            <span class="txt2">
                              Not a member?
                            </span>
                
                            <a href="#" class="txt2 bo1">
                              Sign up now
                            </a>
                          </div>
                        </form>
                      </div>
                  
                  </div>
    
   
    </div>



      <script>
        // Get the modal
        var modal = document.getElementById('id01');

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>


      <!-- Akhir Login Form Modal -->




      <!-- Register Form Modal -->
    <div id="id02" class="modal">

      <div class="row justify-content-center">
          <div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33 animate">
              <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
              <form class="signup100-form validate-form flex-sb flex-w animate" method="POST" action="{{ route('register') }}">
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
                      Already have an account??
                  </span>
      
                  <a href="#" class="txt2 bo1">
                    Sign in now
                  </a>
                </div>
              </form>
            </div>
        
        </div>


    </div>



  <script>
      // Get the modal
      var modal = document.getElementById('id02');

      // When the user clicks anywhere outside of the modal, close it
      window.onclick = function(event) {
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }
  </script>



      <!-- Register Form Modal -->





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
    {{-- login js --}}
    <script src="template/login/vendor/animsition/js/animsition.min.js"></script>
    <script src="template/login/js/main.js"></script>
  </body>
</html>




<!-- menit 56 -->

