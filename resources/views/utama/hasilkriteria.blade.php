@extends('layouts.app')
@section('content')
<section class=" padd-section text-center wow fadeInUp">
<div class="container">
        <div class="section-title text-center">
  
          <h2>Hasil Perbandingan Kriteria</h2>
          <p class="separator">Hasil dari perbandingan dapat dilihat pada Table dibawah ini</p>
  
        </div>
      </div>
<div class="container">
        <div class="wow fadeInUp">
                <div class="row mb-3">
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Matriks Perbandingan Berpasangan</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Kriteria</th>
                                                    @foreach ($kriterias as $kriteria)
                                                        <th scope="col">{{ $kriteria->name }}</th>
                                                    @endforeach
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for ($x = 0; $x <= ($jumlahkriteria - 1); $x++)
                                                    <tr>
                                                        <th scope="row">{{ $kriterias[$x]->name }}</th>
                                                        @for ($y = 0; $y <= ($jumlahkriteria - 1); $y++)
                                                            <td>{{ round($matrikskriteria[$x][$y],3) }}</td>
                                                        @endfor
                                                    </tr>
                                                @endfor
                                            </tbody>
                                            <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Jumlah</th>
                                                        @foreach ($jmlpb as $jml)
                                                            <th scope="col">{{ round($jml,3) }}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                        </table>
            
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="row mb-3">
                        <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Matriks Nilai Kriteria</strong>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <thead class="thead-dark">
                                                <tr>
                                                    <th scope="col">Kriteria</th>
                                                    @foreach ($kriterias as $kriteria)
                                                        <th scope="col">{{ $kriteria->name }}</th>
                                                    @endforeach
                                                    <th scope="col">jumlah</th>
                                                    <th scope="col">priority vector</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @for ($x = 0; $x <= ($jumlahkriteria - 1); $x++)
                                                    <tr>
                                                        <th scope="row">{{ $kriterias[$x]->name }}</th>
                                                        @for ($y = 0; $y <= ($jumlahkriteria - 1); $y++)
                                                            <td>{{ round($matrikskriterianormal[$x][$y],3) }}</td>
                                                        @endfor
                                                        <td>{{ round($jmlpk[$x],3) }}</td>
                                                        <td>{{ round($priorityvector[$x],3) }}</td>
                                                    </tr>
                                                @endfor
                                            </tbody>
                                            <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col" colspan="{{ $jumlahkriteria +2 }}">Nilai Eigen Value</th>
                                                        <th scope="col">{{ round($eigenvalue,3) }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" colspan="{{ $jumlahkriteria +2 }}">Consistency Index</th>
                                                        <th scope="col">{{ round($consistencyIndex,3) }}</th>
                                                    </tr>
                                                    <tr>
                                                        <th scope="col" colspan="{{ $jumlahkriteria +2 }}">Consistency Ratio</th>
                                                        <th scope="col" id="cr">{{ round($consistencyRatio,3) }}</th>
                                                    </tr>
                                                </thead>
                                        </table>
            
                                    </div>
                                </div>
                            </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md-12">
                            @if ($consistencyRatio < 0.1)
                            <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                                    <span class="badge badge-pill badge-primary">Success</span>
                                    <p>
                                        Sangat Baik Nilai Konsistensi anda kurang dari 10% yaitu sebesar 
                                        <strong> {{ round($consistencyRatio,3) }}</strong>
                                        Silahkan Menuju Perhitungan alternatif dengan menekan tombol dibawah ini 
                                    </p>  
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                        <a href="{{ route('user.alternatif') }}" class="btn btn-success btn-lg btn-block"><i class="fa fa-location-arrow"></i>&nbsp;Lanjutkan</a>
                                </div>
                            
                            @else
                            <div class="sufee-alert alert with-close alert-danger  alert-dismissible fade show">
                                    <span class="badge badge-pill badge-danger ">Error</span>
                                    <p>
                                        Sayang sekali Nilai Konsistensi anda Lebih dari 10% yaitu sebesar 
                                        <strong> {{ round($consistencyRatio,3) }}</strong>
                                        Silahkan mengisi kembali nilai perbandingan antar kriteria 
                                    </p>  
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                                <div class="col-md-6 offset-md-3">
                                        <a href="{{ route('user.perbandingankriteria') }}" class="btn btn-warning btn-lg btn-block"><i class="fa fa-location-arrow"></i>&nbsp;Kembali</a>
                                </div>
                            @endif
                    </div>
                    
                </div>
            </div>
</div>
</section>

@endsection

@section('script')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        $(document).ready(function(){
            let cr = $('#cr').html();
            if (cr < 0.1) {
                swal({
                        title: "Good job!",
                        text: "Nilai Consistency Ratio kamu Kurang dari 10% kamu bisa melanjutkan ke perhitungan alternatif",
                        icon: "success",
                    });
                
            } else {
                swal({
                        title: "Bad :(",
                        text: "Nilai Consistency Ratio kamu melebihi 10% silahkan masukkan nilai perbandingan kriteria kembali",
                        icon: "error",
                    });
                
            }
            
        });
    </script>
@endsection