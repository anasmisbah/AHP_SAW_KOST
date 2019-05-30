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
                    <a href="#"><img src="{{ asset('storage/'.$kost->foto) }}" alt="img"></a>
                    <div class="content-blog">
                    <h4><a href="#">{{ $kost->name }}</a></h4>
                    <h5>Rp. {{ $kost->criterias[0]->pivot->value }}/bulan</h5>
                    <span>{{ $kost->created_at->diffForHumans() }}</span>
                    <a class="pull-right readmore" href="#">read more</a>
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
@endsection