
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
      <!-- font -->
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

  <!-- icon -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
    integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

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
 

    
    <link rel="stylesheet" type="text/css" href="template/login/css/util.css">
    <link rel="stylesheet" type="text/css" href="template/login/css/main.css">
<!-- CSS saya -->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>SPK KOST</title>
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
            <a class="nav-item nav-link page-scroll" href="#home" id="home">Beranda<span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link page-scroll" href="#tentang">Tentang</a>
            <a class="nav-item nav-link page-scroll" href="#team">Tim Kami</a>
                @auth
                    @if (Auth::user()->role == "admin")
                    @endif
                @else
                  <a class="nav-item btn btn-success btn-sm tombol text-center"
                  onclick="document.getElementById('id01').style.display='block'" tabindex="-1" aria-disabled="true">Login</a>
                  <a class="nav-item btn btn-primary btn-sm tombol text-center ml-3"
                    onclick="document.getElementById('id02').style.display='block'" tabindex="-1"
                    aria-disabled="true">Register</a>
                @endauth
            
          
          </div>
    </div>

</nav>


    <!-- Akhir Navbar -->




      <!-- Jumbotron -->

      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1>Pendukung Keputusan Pencarian <strong>Kost</strong> </h1>
          <p>Website Pendukung keputusan anda dalam mencari kost di samarinda</p>

          
          @auth
            @if (Auth::user()->role == "admin")
              <a class="btn btn-warning tombol-cari" href="{{ route('spkkost.dashboard') }}"><i
                class="fas fa-user"></i>Admin</a>
            @else
              <a class="btn btn-warning tombol-cari" href="{{ route('home') }}"><i
                class="fas fa-hotel"></i>Yuk! Mulai Pilih</a>
            @endif
          @else
          <a class="btn btn-warning tombol-cari" onclick="document.getElementById('id01').style.display='block'"><i
            class="fas fa-hotel"></i> Tentukan Kriteriamu Sekarang !</a>
          @endauth
          
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
        <div class="row Workingspace" id="tentang">
          <div class="col-lg-6">
            <img src="images/about.jpg" alt="" class="img-fluid">
          </div>

          <div class="col-lg-5">
            <h3>Merasakan <span>KENYAMANAN</span> seperti tinggal <span>DIRUMAH</span></h3>
          </div>
        </div>


      </div>

<!--Akhir Workingspace  -->


<!-- Nama Kelompol  -->
  <div class="bg-light pb-5" id="team">
    <div class="container">
      <div class="row ">
        <div class="col-12 text-center text-teams mt-5">
          <h3>Our Teams</h3>
        </div>
      </div>
      <div class="row our-team mt-5">
        <div class="col-6 wow fadeInUp">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-3 "><img src="/images/avatarang.png" class="img-circle" alt=""></div>
                <div class="col-9">
                  <h5 class="card-title">Anas Misbahuddin</h5>
                  <p class="card-text">Tukang buat sistem (backend)</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-6">

          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-3 "><img src="/images/avatarang.png" class="img-circle" alt=""></div>
                <div class="col-9">
                  <h5 class="card-title">Maratus Soleha</h5>
                  <p class="card-text">Tukang buat sistem (backend)</p>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-3 "><img src="/images/avatarang.png" class="img-circle" alt=""></div>
                <div class="col-9">
                  <h5 class="card-title">Asrah</h5>
                  <p class="card-text">Tukang buat sistem (backend)</p>
                </div>
              </div>
            </div>
          </div>

        </div>
        <div class="col-6">

          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-3 "><img src="/images/avatarang.png" class="img-circle" alt=""></div>
                <div class="col-9">
                  <h5 class="card-title">Dana Ananda N</h5>
                  <p class="card-text">Tukang buat sistem (backend)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-6">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-3 "><img src="images/avatarang.png" class="img-circle" alt=""></div>
                <div class="col-9">
                  <h5 class="card-title">Octafian Christianto</h5>
                  <p class="card-text">Tukang buat sistem (backend)</p>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>


<!--Akhir Nama Kelompol  -->

<a href="#home" class="page-scroll"><img src="/images/up.png" class="float-right up" height="80px" width="80px" alt=""></a>

<footer class="footer mt-auto py-3 bg-secondary ">
  <div class="container text-center">
    <span class="text-white ">&copy; Copyright 2019 Kelompok x | Sistem Pendukung Keputusan </span>
  </div>
</footer>





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
                      Already have an account?
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
    <script src="/lib/wow/wow.min.js"></script>
    {{-- login js --}}
    <script src="template/login/vendor/animsition/js/animsition.min.js"></script>
    <script src="template/login/js/main.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
      $(document).ready(function(){
        $('.page-scroll').on('click', function (e) {
        // ambil isi href
        let tujuan = $(this).attr('href');
        //tangkap elemen
        let elemenHref = $(tujuan);
        $('body').animate({
          scrollTop: elemenHref.offset().top
        },800);
        
        // e.preventDefault();
      });
      $(window).scroll(function () {  
    $('.up').show('fadeIn');
  });
      });
      
  
          
      
    </script>
  </body>
</html>




<!-- menit 56 -->

