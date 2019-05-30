@extends('layouts.app')
@section('content')
<section id="get-started" class="padd-section text-center wow fadeInUp">

    <div class="container">
      <div class="section-title text-center">

        <h2>Perbandingan Kriteria</h2>
        <p class="separator">Silahkan isi masing-masing nilai dari perbandingan kriteria</p>

      </div>
    </div>

    <div class="container">
        <form action="{{ route('user.analisakriteria') }}" method="POST">
            @csrf
      <div class="row">
        @for ($i=0; $i <= ($jumlahkriteria - 2); $i++)
                @for ($j=$i+1; $j <= ($jumlahkriteria - 1) ; $j++)
                @php
                    $urut++;
                    $nilai= null ;
                    $first = true;
                    if ($oldPerbandingan->count()) {
                    $nilai = $oldPerbandingan->where('criteria1_id',$kriteria[$i]->id)->where('criteria2_id',$kriteria[$j]->id)->first()->nilai;
                    $first = false;
                    }
                    
                @endphp
                <div class="col-md-12 col-lg-6 mb-3">
                    <div class="feature-block">
        
                    <img src="/lib/img/svg/cloud.svg" alt="img" class="img-fluid">
                    <div class="row form-group">
                            <div class="col col-md-4"><label for="hf-email" class=" form-control-label">Kriteria</label></div>
                            <div class="col-12 col-md-8">
                                    
                                    
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input required type="radio" id="{{ $kriteria[$i]->name.$urut }}" name="pilihan[{{ $urut }}]" value="1" class="custom-control-input" {{ !$first ? $nilai >= 1?'checked':'' :''}}>
                                            <label class="custom-control-label" for="{{ $kriteria[$i]->name.$urut }}">{{ $kriteria[$i]->name }}</label>
                                          </div>
                                          <div class="custom-control custom-radio custom-control-inline">
                                            <input required type="radio" id="{{ $kriteria[$j]->name.$urut }}" name="pilihan[{{ $urut }}]" value="2" class="custom-control-input"  {{ !$first ? $nilai <1?'checked':'':'' }}>
                                            <label class="custom-control-label" for="{{ $kriteria[$j]->name.$urut }}">{{ $kriteria[$j]->name }}</label>
                                          </div>
                                          <br>
                                        <span class="help-block">Pilihlah kriteria yang paling penting</span>
                                </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-4"><label for="nilai" class=" form-control-label">Nilai Perbandingan</label></div>
                            <div class="col-12 col-md-8">
                                    <input type="float" max="9" id="nilai" 
                                    value="{{ !$first ? $nilai >= 1 ?  $nilai : round(1/$nilai):'' }}" 
                                    name="bobot[{{ $urut }}]" placeholder="masukkan nilai" class="form-control" required>
    
                                <span class="help-block">Masukkan Nilai Perbandingan antara kedua kriteria</span></div>
                        </div>
        
                    </div>
                </div>
            @endfor
        @endfor
      </div>
      <div class="row m-5">
          <div class="col-md-12 col-lg-12">
                <button type="submit" class="btn btn-info btn-lg"><i class="fa fa-location-arrow"></i>&nbsp;Mulai Hitung</button>
          </div>
      </div>
    </form>
    </div>

  </section>


@endsection