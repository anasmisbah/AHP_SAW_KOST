<nav class="navbar navbar-expand-sm navbar-default">

    <div class="navbar-header">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="./"><img src="{{  asset('images/logoadmin.jfif') }}" alt="Logo"></a>
        <a class="navbar-brand hidden" href="./"><img src="{{  asset('images/logo2.png')}}" alt="Logo"></a>
    </div>

    <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
            <li class="{{ Request::segment(1) == 'dashboard'?'active':'' }}">
                <a href="{{ route('spkkost.dashboard') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
            </li>
            <li class="{{ Request::segment(1) == 'user'?'active':'' }}">
                <a href="{{ route('user.index') }}"> <i class="menu-icon fa fa-users"></i>User</a>
            </li>
            <li class="{{ Request::segment(1) == 'kost'?'active':'' }}">
                <a href="{{ route('kost.index') }}"> <i class="menu-icon fa fa-home"></i>Kost</a>
            </li>
            <li class="{{ Request::segment(1) == 'criteria'?'active':'' }}">
                <a href="{{ route('criteria.index') }}"> <i class="menu-icon fa fa-tags"></i>Criteria </a>
            </li>
            <h3 class="menu-title">SPK KOST</h3><!-- /.menu-title -->
            <li class="menu-item-has-children dropdown {{ Request::segment(1) == 'analysis'?'active':'' }}">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Analisa</a>
                <ul class="sub-menu children dropdown-menu">
                    <li ><i class="menu-icon fa fa-puzzle-piece"></i><a href="{{ route('analysiscriteria.index') }}">Analisa Perbandingan Kriteria (AHP)</a></li>
                    <li><i class="menu-icon fa fa-id-badge"></i><a href="{{ route('alternatif.tampil') }}">Perhitungan Alternatif (SAW)</a></li>
                </ul>
            </li>
        </ul>
    </div><!-- /.navbar-collapse -->
</nav>