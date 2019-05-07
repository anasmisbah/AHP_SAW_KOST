@extends('templates.main')
@section('title')
    Perbandingan Criteria
@endsection
@section('breadcumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Analisa Perbandingan Kriteria</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="">Analisa</a></li>
                    <li class="active">Perbandingan Kriteria</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="animated fadeIn">
<form action="{{ route('analisyscriteria.proses') }}" method="post" class="form-horizontal">
    @csrf
    <div class="row">
        @for ($i=0; $i <= ($jumlahkriteria - 2); $i++)
            @for ($j=$i+1; $j <= ($jumlahkriteria - 1) ; $j++)
            @php
                $urut++;
            @endphp
            <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <strong>Kriteria</strong>
                        </div>
                        <div class="card-body card-block">
                            
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="hf-email" class=" form-control-label">Kriteria</label></div>
                                    <div class="col-12 col-md-9">
                                            
                                            <div class="form-check-inline form-check">
                                                    <label for="inline-radio1" class="form-check-label ">
                                                        <input type="radio" id="inline-radio1" name="pilihan[{{ $urut }}]" value="1" class="form-check-input">{{ $kriteria[$i]->name }}
                                                    </label>
                                                    <label for="inline-radio2" class="form-check-label ">
                                                        <input type="radio" id="inline-radio2" name="pilihan[{{ $urut }}]" value="2" class="form-check-input">{{ $kriteria[$j]->name }}
                                                    </label>
                                                    
                                                </div>
            
                                                <span class="help-block">Pilihlah kriteria yang paling penting</span>
            
                                            
                                        </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3"><label for="nilai" class=" form-control-label">Nilai Perbandingan</label></div>
                                    <div class="col-12 col-md-9">
                                            <input type="float" max="9" id="nilai" name="bobot[{{ $urut }}]" placeholder="masukkan nilai" class="form-control">
            
                                        <span class="help-block">Masukkan Nilai Perbandingan antara kedua kriteria</span></div>
                                </div>
                            
                        </div>
                    </div>
    </div>
            @endfor
        @endfor
            
    </div>
    

<div class="row">
    <div class="col-md-6 offset-md-3">
            <button type="submit" class="btn btn-outline-success btn-lg btn-block"><i class="fa fa-location-arrow"></i>&nbsp;Submit</button>
    </div>
</div>


</form>
</div>
@endsection