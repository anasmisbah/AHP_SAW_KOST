@extends('layouts.app')
@section('content')
<section class=" padd-section text-center wow fadeInUp">
        <div class="container">
            <div class="section-title text-center">
                <h2>Hasil Perangkingan Alternatif Kost</h2>
                <p class="separator">Hasil dari perbandingan dapat dilihat pada Table dibawah ini</p>
            </div>
        </div>
        <div class="container">
                <div class="row">
                        <div class="col-lg-12">
                                <div class="card">
                                        <div class="card-header">
                                            <strong class="card-title">Tabel Prangkingan</strong>
                                        </div>
                                        <div class="card-body">
                                            <table class="table text-center">
                                                <thead class="thead-dark">
                                                    <tr>
                                                            <th>ALternatif Kost</th>
                                                            <th>Nilai Preferensi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($pvs as $pv)
                                                        <tr>
                                                            <td>{{ $pv->kost->name }}</td>
                                                            <td>{{ round($pv->preferensi,3) }}</td>
                                                            
                                                        </tr> 
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                
                        </div>
                    </div>
        </div>
</section>
@endsection