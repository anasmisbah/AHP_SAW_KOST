@extends('layouts.app')
@section('content')
<section id="blog" class="padd-section wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Data Alternatif Kost</h2>
        <p class="separator">Integer cursus bibendum augue ac cursus .</p>

      </div>
    </div>

    <div class="container">
      <div class="row">
        @foreach ($kosts as $kost)
            <div class="col-md-6 col-lg-4 mb-2">
                <div class="block-blog text-left">
                    <a href="#"><img width="200px" height="200px" src="{{ asset('storage/'.$kost->foto) }}" alt="img"></a>
                    <div class="content-blog">
                    <h4><a href="#">{{ $kost->name }}</a></h4>
                    <h5>Rp. {{ $kost->criterias[0]->pivot->value }}/bulan</h5>
                    <span>{{ $kost->created_at->diffForHumans() }}</span>
                    <a class="pull-right readmore btn-detail" id={{ $kost->id }} data-toggle="modal" data-target="#exampleModal">read more</a>
                    
                    </div>
                </div>
            </div>
        @endforeach
      </div>
      <div class="row justify-content-md-center mt-4">
        <div class="col-md-auto">
            {{$kosts->links()}}
        </div>
        </div>
    </div>
  </section>
  
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Kost <strong id="title"></strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
              <div class="container-fluid">
                <div class="row justify-content-center">
                  <div class="col-md-8">
                    <img class="img-thumbnail" id="foto" src="{{ asset('/storage/fotos/2toKEurwoLzYc6teEooKWBLz4setQyIEtoxqSzIR.png') }}" alt="">
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-4">Nama</div>
                  <div class="col-md-8" id="nama">.col-md-4 .ml-auto</div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4">Alamat</div>
                  <div class="col-md-8" id="alamat">.col-md-4 .ml-auto</div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4">Nomor Telp</div>
                  <div class="col-md-8" id="nomortelp">.col-md-4 .ml-auto</div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4">Harga</div>
                  <div class="col-md-8" id="harga">.col-md-4 .ml-auto</div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4">Fasilitas</div>
                  <div class="col-md-8" id="fasilitas">.col-md-4 .ml-auto</div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4">Ukuran</div>
                  <div class="col-md-8" id="ukuran">.col-md-4 .ml-auto</div>
                </div>
                <div class="row mt-2">
                  <div class="col-md-4" >Jarak</div>
                  <div class="col-md-8" id="jarak">.col-md-4 .ml-auto</div>
                </div>
              </div>
            </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
@endsection
@section('script')
    <script>
    $('body').on('click','.btn-detail',function(){
      $('#myModal').modal('show')
      var id = $(this).attr('id');
      $.ajax({
                url:'{{ route('kost.detail') }}',
                type:'GET',
                dataType:'JSON',
                data:{id:id},
                success:function(data){
                   $('#foto').attr('src','/storage/'+data.foto)
                   $('#nama').html(data.name)
                   $('#title').html(data.name)
                   $('#alamat').html(data.address)
                   $('#nomortelp').html(data.phone_number)
                   $('#harga').html(data.harga+'/perbulan')
                   $('#ukuran').html(data.ukuran+' m<sup>2</sup>')
                   $('#jarak').html(data.jarak+' meter')
                   if (data.fasilitas == 2) {
                    $('#fasilitas').html('Kurang lengkap')
                   } else if(data.fasilitas == 3){
                    $('#fasilitas').html('Cukup lengkap')
                   } else {
                    $('#fasilitas').html('Sangat lengkap')
                   }
                }
            });
    });
    </script>
@endsection