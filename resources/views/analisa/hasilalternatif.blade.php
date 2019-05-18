@extends('templates.main')
@section('title')
    Hasil Perbandingan Criteria
@endsection
@section('breadcumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Analisa ALternatif (SAW)</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="">Analisa</a></li>
                    <li><a href="">Perhitungan Alternatif</a></li>
                    <li class="active">Hasil Perhitungan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('cssadd')
    <style>
        body{
            margin-bottom: 40px
        }
    </style>
@endsection
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-md-12">
                <div class="sufee-alert alert with-close alert-primary alert-dismissible fade show">
                        <span class="badge badge-pill badge-primary">Success</span>
                        <p>
                            Selamat kos terbaik untuk anda adalah <strong> {{ $preferensiFromDB->kost->name }}</strong>
                            dengan nilai preferensi sebesar <strong>{{ round($preferensiFromDB->preferensi,4) }}</strong>
                        </p>  
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Matriks Hasil Perhitungan</strong>
                </div>
                <div class="card-body">
                    <table class="table text-center">
                        <thead class="thead-dark">
                            <tr>
                                <th rowspan="2">Alternatif Kost</th>
                                <th colspan="4">Kriteria</th>
                                <th rowspan="2">Nilai Preferensi</th>
                            </tr>
                            <tr>
                                @foreach ($criterias as $criteria)
                                <th>{{ $criteria->name }}</th>
                                @endforeach  
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < $kosts->count(); $i++)
                                <tr>
                                    <td>{{ $kosts[$i]->name }}</td>
                                    @for ($j = 0; $j < $criterias->count(); $j++)
                                        <td>{{ round($matriksnormalisasi[$i][$j],3) }}</td>
                                    @endfor
                                    <td>{{ round($preferensi[$i],3) }}</td>
                                </tr>    
                            @endfor
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection