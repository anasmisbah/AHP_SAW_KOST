@extends('templates.main')
@section('title')
    Dashboard
@endsection
@section('breadcumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="col-xl-3 col-lg-6">
        <section class="card">
            <div class="twt-feed blue-bg">
                <div class="corner-ribon black-ribon">
                    <i class="fa fa-twitter"></i>
                </div>
                <div class="fa fa-twitter wtt-mark"></div>
    
                <div class="media">
                    <a href="#">
                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                    </a>
                    <div class="media-body">
                        <h2 class="text-white display-6">Jim Doe</h2>
                        <p class="text-light">Project Manager</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
<div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-home text-success border-success"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Total Kost</div>
                        <div class="stat-digit count">{{ $kostcnt }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">User</div>
                        <div class="stat-digit count">{{ $usercnt }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="col-xl-3 col-lg-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-tag-grid2 text-warning border-warning"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Kriteria</div>
                        <div class="stat-digit count">{{ $criteriacnt }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>





@endsection