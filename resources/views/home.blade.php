@extends('layouts.app')
@section('css')
<style type="text/css">
  .garis{
      border-bottom: 5px solid #efedec8f;
  }
</style>

@endsection
@section('content')
<!--==========================
    Hero Section
  ============================-->
  <section id="hero" class="wow fadeIn">
    <div class="hero-container">
      <h1>Welcome to SPK KOST</h1>
      <h2>memberikan bantuan dalam memilih kost sesuai kebutuhan anda</h2>
      <img src="/lib/img/hero-img.png" alt="Hero Imgs">
      <a href="#get-started" class="btn-get-started scrollto">Get Started</a>
    </div>
  </section><!-- #hero -->

  <!--==========================
    Get Started Section
  ============================-->
  <section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Tata Cara Menggunakan Sistem Kami</h2>

      </div>
    </div>
    <div class="container">
        <div class="row mb-4 garis" >
            
                <div class="col-sm-5 col-md-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                    <img src="http://kkn.fkti.unmul.ac.id/triangle/multicolor/images/pendaftaran2.jpg" class="img-responsive" alt="">
                </div>
                <div class="col-sm-6 col-md-7 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms" >
                    <h3><strong>1. Pendaftaran Online </strong></h3>
                    <P>lakukan pendataran terlebih dahulu pada website spk kost dengan menggunakan email dan password. namun apabilan anda telah memiliki akun silahkan sign in dengan akun anda sebelumnya. kami juga menyediakan opsi untuk login menggunakan akun social media anda seperti facebook dan google</P>

                </div>

        </div>
        <div class="row mb-4 garis" >
            <div class="col-sm-6 col-md-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms" >
                <h3><strong>2. Melihat Alternatif kost </strong></h3>
                <P>silahkan lihat terlebih dahulu alternatif kost yang telah kami sediakan pada menu "kost". kami memiliki lebih dari 100++ alternatif kos yang berada disekitaran universitas mulawarman dengan harga,fasilitas,ukuran dan jarak yang bervariasi bagi anda.</P>

            </div>
            <div class="col-sm-5 col-md-5 wow fadeInRight " data-wow-duration="500ms" data-wow-delay="300ms">
                <img src="http://kkn.fkti.unmul.ac.id/triangle/multicolor/images/pendaftaran2.jpg" class="img-responsive" alt="">
            </div>
            

    </div>
    <div class="row mb-4 garis" >
            
        <div class="col-sm-5 col-md-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
            <img src="http://kkn.fkti.unmul.ac.id/triangle/multicolor/images/pendaftaran2.jpg" class="img-responsive" alt="">
        </div>
        <div class="col-sm-6 col-md-7 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms" >
            <h3><strong>3. Perbandingan Kriteria </strong></h3>
            <P>apabila anda telah yakin dan ingin menggunakan sistem kami untuk membantu anda memilih kost terbaik sesuai dengan kriteria yang anda inginkan maka silahkan menuju menu analisa kemudia pilih menu perbandingan kriteria. pada menu tersebut anda akan melakukan pemilihan kriteria dan nilai perbandingan kriteria tersebut dengan kriteria pasangannya.sistem kami akan melakukan perhitungan bobot kriteria menggunakan metode AHP.
              </P>

        </div>

</div>
<div class="row mb-4 garis" >
    <div class="col-sm-6 col-md-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms" >
        <h3><strong>4. Perhitungan Alternatif Kost </strong></h3>
        <P>setelah mendapatkan bobot untuk masing-masing kriteria maka selanjutnya adalah menentukan kost terbaik bagi anda sesuai dengan kriteria yang anda inginkan. sistem kami akan secara otomatis melakukan perhitungan dengan menggunakan metode SAW</P>

    </div>
    <div class="col-sm-5 col-md-5 wow fadeInRight " data-wow-duration="500ms" data-wow-delay="300ms">
        <img src="http://kkn.fkti.unmul.ac.id/triangle/multicolor/images/pendaftaran2.jpg" class="img-responsive" alt="">
    </div>
    

</div>
<div class="row mb-4 garis" >
            
    <div class="col-sm-5 col-md-5 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
        <img src="http://kkn.fkti.unmul.ac.id/triangle/multicolor/images/pendaftaran2.jpg" class="img-responsive" alt="">
    </div>
    <div class="col-sm-6 col-md-7 wow fadeInRight" data-wow-duration="500ms" data-wow-delay="300ms" >
        <h3><strong>5. Rangking Kost </strong></h3>
        <P>tahapan selanjutnya adalah melihat hasil rangking kost yang telah didapatkan. pada kost urutan pertama adalah kost yang sesuai bagi anda.</P>

    </div>

</div>

    </div>
  </section>

 
  



  <!--==========================
    Testimonials Section
  ============================-->

  <section id="testimonials" class="padd-section text-center wow fadeInUp">
    <div class="container">
      <div class="row justify-content-center">

        <div class="col-md-8">

          <div class="testimonials-content">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

              <div class="carousel-inner" role="listbox">

                <div class="carousel-item  active">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>Kimberly Tran<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>Henderson<span>manager</span></h4>

                  </div>
                </div>

                <div class="carousel-item ">
                  <div class="top-top">

                    <h2>Our Users Speack volumes us</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type
                      specimen book. It has survived not only five centuries.</p>
                    <h4>David Spark<span>manager</span></h4>

                  </div>
                </div>

              </div>

              <div class="btm-btm">

                <ul class="list-unstyled carousel-indicators">
                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                  <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ul>

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
@endsection
