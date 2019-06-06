<!DOCTYPE html>
<html  lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>SPK Pikos</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}" defer></script>
  <!-- Favicons -->
  <!-- Fonts -->
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Styles -->
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  
  <link rel="shortcut icon" href="/images/favicon.ico">
  <link href="/lib/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Bootstrap css -->
  <!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
  <link href="/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="/lib/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
  <link href="/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="/lib/animate/animate.min.css" rel="stylesheet">
  <link href="/lib/modal-video/css/modal-video.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="/lib/css/style.css" rel="stylesheet">
  @yield('css')
  <!-- =======================================================
    Theme Name: eStartup
    Theme URL: https://bootstrapmade.com/estartup-bootstrap-landing-page-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body>

  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
        <h1><a href="#hero" class="scrollto"><span>spk</span>PiKos</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="{{ Request::segment(1) == 'home'?'menu-active':'' }}"><a href="{{ route('home') }}">Home</a></li>
          @if (Auth::user()->role == "admin")
           <li><a href="{{ url('/dashboard') }}">Admin</a></li>
          @endif
          <li class="{{ Request::segment(2) == 'kost'?'menu-active':'' }}"><a href="{{ route('user.kostindex') }}">Kost</a></li>
          <li class="menu-has-children {{ Request::segment(2) == 'user'?'menu-active':'' }}"><a>Analisa</a>
            <ul>
              <li><a href="{{ route('user.perbandingankriteria') }}">Pemilihan Kost</a></li>
              <li><a href="{{ route('user.hasilrangking') }}">Hasil Perangkingan</a></li>
            </ul>
          </li>
          <li class="menu-has-children"><a href=""><img src="{{ asset('storage/'.Auth::user()->avatar) }}" alt="" width="20px"></a>
            <ul>
              <li><a>{{ Auth::user()->name }}</a></li>
              <li><a href="{{ route('user.setting') }}">Setting</a></li>
              <li>
                <a href="{{ route('logout') }}"onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              </li>
              
            </ul>
          </li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->

  <section class="main">
      @yield('content')
  </section>
  

 
  

  

  

  <!--==========================
    Footer
  ============================-->
  <footer class="footer">
    <div class="copyrights">
      <div class="container">
        <p>&copy; Copyrights eStartup. All rights reserved.</p>
        <div class="credits">
          <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=eStartup
          -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
    </div>

  </footer>



  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="/lib/jquery/jquery.min.js"></script>
  <script src="/lib/jquery/jquery-migrate.min.js"></script>
  <script src="/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/lib/superfish/hoverIntent.js"></script>
  <script src="/lib/superfish/superfish.min.js"></script>
  <script src="/lib/easing/easing.min.js"></script>
  <script src="/lib/modal-video/js/modal-video.js"></script>
  <script src="/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/lib/wow/wow.min.js"></script>

  <!-- Template Main Javascript File -->
  <script src="/lib/js/main.js"></script>
  @yield('script')
</body>
</html>
