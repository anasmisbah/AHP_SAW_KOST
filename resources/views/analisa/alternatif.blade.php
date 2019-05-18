@extends('templates.main')
@section('title')
    Perhitungan Alternatif
@endsection
@section('cssadd')
    <style>
        body{
            margin-bottom: 40px
        }
    </style>
@endsection
@section('breadcumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Analisa Alternatif (SAW)</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="">Analisa</a></li>
                    <li class="active">Perhitungan Alternatif</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="animated fadeIn">
    <div class="row">
        <div class="col-lg-12">
                <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Matriks Perbandingan Berpasangan</strong>
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
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <a href="{{ route('alternatif.proses') }}" class="btn btn-outline-success btn-lg btn-block"><i class="fa fa-location-arrow"></i>&nbsp;Lakukan Perhitungan</a>
        </div>
    </div>
</div>
@endsection 