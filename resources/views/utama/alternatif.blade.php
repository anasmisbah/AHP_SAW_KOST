@extends('layouts.app')
@section('content')
<section id="get-started" class="padd-section text-center wow fadeInUp">

        <div class="container">
          <div class="section-title text-center">
    
            <h2>Alternatif Kost</h2>
            <p class="separator">Tabel di bawah adalah daftar alternatif kost yang dimiliki oleh sistem kami</p>
    
          </div>
        </div>
        <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Matriks Alternatif</strong>
                                        </div>
                                        <div class="card-body">
                                            <table class="table text-center">
                                                <thead class="thead-dark">
                                                    <tr>
                                                            <th rowspan="2">ALternatif Kost</th>
                                                            <th colspan="4">Kriteria</th>
                                                    </tr>
                                                    <tr>
                                                        
                                                        @foreach ($criterias as $criteria)
                                                            <th>{{ $criteria->name }}</th>
                                                        @endforeach
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($kosts as $kost)
                                                        <tr>
                                                            <td>{{ $kost->name }}</td>
                                                            @foreach ($kost->criterias as $value)
                                                                <td>{{ $value->pivot->value }}</td>
                                                            @endforeach
                                                        </tr> 
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6 offset-md-3">
                            <a href="{{ route('user.alternatifproses') }}" class="btn btn-success btn-lg btn-block"><i class="fa fa-location-arrow"></i>&nbsp;Lakukan Perhitungan</a>
                        </div>
                    </div>
        </div>
</section>
@endsection