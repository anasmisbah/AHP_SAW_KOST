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
<div class="col-lg-3 col-md-6">
    <div class="social-box facebook">
        <i class="fa fa-facebook"></i>
        <ul>
            <li>
                <span class="count">40</span> k
                <span>friends</span>
            </li>
            <li>
                <span class="count">450</span>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box twitter">
        <i class="fa fa-twitter"></i>
        <ul>
            <li>
                <span class="count">30</span> k
                <span>friends</span>
            </li>
            <li>
                <span class="count">450</span>
                <span>tweets</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box linkedin">
        <i class="fa fa-linkedin"></i>
        <ul>
            <li>
                <span class="count">40</span> +
                <span>contacts</span>
            </li>
            <li>
                <span class="count">250</span>
                <span>feeds</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->


<div class="col-lg-3 col-md-6">
    <div class="social-box google-plus">
        <i class="fa fa-google-plus"></i>
        <ul>
            <li>
                <span class="count">94</span> k
                <span>followers</span>
            </li>
            <li>
                <span class="count">92</span>
                <span>circles</span>
            </li>
        </ul>
    </div>
    <!--/social-box-->
</div>
<!--/.col-->

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
        <div class="weather-category twt-category">
            <ul>
                <li class="active">
                    <h5>750</h5>
                    Tweets
                </li>
                <li>
                    <h5>865</h5>
                    Following
                </li>
                <li>
                    <h5>3645</h5>
                    Followers
                </li>
            </ul>
        </div>
    </section>
</div>


<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Total Profit</div>
                    <div class="stat-digit">1,012</div>
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
                    <div class="stat-text">New Customer</div>
                    <div class="stat-digit">961</div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-lg-6">
    <div class="card">
        <div class="card-body">
            <div class="stat-widget-one">
                <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                <div class="stat-content dib">
                    <div class="stat-text">Active Projects</div>
                    <div class="stat-digit">770</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection