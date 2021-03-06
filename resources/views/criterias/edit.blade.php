@extends('templates.main')
@section('title')
    Criteria Create
@endsection
@section('breadcumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Criteria</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li><a href="#">Criteria</a></li>
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
        

    <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <strong>Criteria</strong> Form
                    </div>
                    <form action="{{ route('criteria.update',['criterion'=>$criteria]) }}" method="POST" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card-body card-block">
                            <div class="row form-group">
                                <div class="col col-md-12">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-tags"></i></div>
                                        <input type="text" name="name" placeholder="Criteria" class="form-control {{ $errors->first('name')? "is-invalid": "" }}"  value="{{ old('name')?old('name'):$criteria->name }}">
                                        <div class="invalid-feedback">
                                            {{$errors->first('name')}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label class="form-control-label">Category</label></div>
                                <div class="col col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline is-invalid">
                                        <input {{ $criteria->category == 'benefit'?'checked':'' }} type="radio" value="benefit" id="benefit" name="category" class="custom-control-input" required>
                                        <label class="custom-control-label" for="benefit">Benefit</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input {{ $criteria->category == 'cost'?'checked':'' }} type="radio" id="cost" name="category" value="cost" class="custom-control-input" required>
                                        <label class="custom-control-label" for="cost">Cost</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-success btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Update
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                            <a href="{{ route('criteria.index') }}" class="btn btn-warning btn-sm">
                                <i class="fa fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>
@endsection