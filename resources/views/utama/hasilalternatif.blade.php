@extends('layouts.app')
@section('content')
<section id="get-started" class="padd-section text-center wow fadeInUp">

        <div class="container">
          <div class="section-title text-center">
    
            <h2>Hasil Perhitungan Alternatif Kost</h2>
            <p class="separator">hasil perhitungan dengan menggunakan metode SAW</p>
    
          </div>
        </div>
        <div class="container">
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
</section>
@endsection
