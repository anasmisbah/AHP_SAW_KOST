@extends('templates.main')
@section('title')
    User Create
@endsection
@section('breadcumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>User</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">User</a></li>
                    <li class="active">Create</li>
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
        

    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <strong>Form</strong> User
                </div>
                <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                <div class="card-body card-block">
                    
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="name" name="name" placeholder="Name..." class="form-control"><small class="form-text text-muted">Input User Name</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="username" class=" form-control-label">Username</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="username" name="username" placeholder="username..." class="form-control"><small class="form-text text-muted">Input User username</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="email" class=" form-control-label">Email</label></div>
                            <div class="col-12 col-md-9"><input type="email" id="email" name="email" placeholder="Email..." class="form-control"><small class="help-block form-text">Please enter user email</small></div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="password-input" class=" form-control-label">Password</label></div>
                            <div class="col-12 col-md-9"><input type="password" id="password-input" name="password" placeholder="Password..." class="form-control"><small class="help-block form-text">Please enter a complex password</small></div>
                        </div>    
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Role</label></div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="admin" class="form-check-label ">
                                                <input type="radio" id="admin" name="role" value="admin" class="form-check-input">Admin
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="member" class="form-check-label ">
                                                <input type="radio" id="member" name="role" value="member" class="form-check-input">Member
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>  
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="avatar" class=" form-control-label">Avatar</label></div>
                                <div class="col-12 col-md-9"><input type="file" id="avatar" name="avatar" class="form-control-file"></div>
                            </div>
                    
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">
                        <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                        <i class="fa fa-ban"></i> Reset
                    </button>
                </div>
            </form>
            </div>

    </div>
</div>
@endsection