@extends('templates.main')
@section('title')
    Kost List
@endsection
@section('cssadd')
    <link rel="stylesheet" href="{{ asset('template/asset/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/asset/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}">
@endsection
@section('breadcumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Kost</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Kost</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<div class="animated fadeIn">
    @if (session('status'))
        <div class="row">
            <div class="col-sm-12">
                <div class="alert  alert-success alert-dismissible fade show" role="alert">
                    <span class="badge badge-pill badge-success">Success</span> {{ session('status') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    @endif
    <div class="row">

        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <strong class="card-title">Data Table</strong>
                    <a href="{{ route('kost.create') }}" class="btn btn-outline-primary btn-sm float-right mt-1"><i class="fa fa-plus-circle"></i>&nbsp; Add</a>
                </div>
                <div class="card-body">
                    <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Phone Number</th>
                                <th>Address</th>
                                <th>type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kosts as $kost)
                                <tr>
                                    <td>{{ $kost->name }}</td>
                                    <td>{{ $kost->phone_number }}</td>
                                    <td>{{ $kost->address }}</td>
                                    <td>{{ $kost->type }}</td>
                                    <td>
                                        <a href="{{ route('kost.edit',['kost'=>$kost]) }}" class="btn btn-outline-warning btn-sm">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                        <form class="d-inline"
                                        onsubmit="return confirm('Apakah anda ingin menghapus Pengguna secara permanen?')" 
                                        action="{{route('kost.destroy', $kost)}}" 
                                        method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm">
                                                <i class="fa fa-trash"></i></button>
                                        </form>
                                        <a href="" class="btn btn-outline-success btn-sm">
                                            <i class="fa fa-location-arrow"></i>
                                        </a>                         
                                    </td>
                                </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scriptadd')
    <script src="{{ asset('template/asset/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/asset/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/asset/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template/asset/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template/asset/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template/asset/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template/asset/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('template/js/init-scripts/data-table/datatables-init.js') }}"></script>
@endsection