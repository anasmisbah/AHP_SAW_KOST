@extends('templates.main')
@section('title')
    Kost Create
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
                    <li><a href="#">Kost</a></li>
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
                <form action="{{ route('kost.store') }}" method="post" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                <div class="card-body card-block">
                    
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="name" class=" form-control-label">Name</label></div>
                            <div class="col-12 col-md-9"><input value="{{ old('name') }}" type="text" id="name" name="name" placeholder="Name..." class="form-control {{ $errors->first('name')?'is-invalid':'' }}"><small class="form-text text-muted">Input Kost Name</small>
                                <div class="invalid-feedback">
                                    {{$errors->first('name')}}
                                </div>
                            </div>
                            
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="phone_number" class=" form-control-label">Phone Number</label></div>
                            <div class="col-12 col-md-9"><input value="{{ old('phone_number') }}" type="text" id="phone_number" name="phone_number" placeholder="phone number..." class="form-control {{ $errors->first('phone_number')?'is-invalid':'' }}"><small class="form-text text-muted">Input Phone Number</small>
                                <div class="invalid-feedback">
                                    {{$errors->first('phone_number')}}
                                </div>
                            </div>
                            
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3"><label for="address" class=" form-control-label">Adress</label></div>
                            <div class="col-12 col-md-9"><textarea name="address" id="address" rows="7" placeholder="Adress..." class="form-control {{ $errors->first('address')?'is-invalid':'' }}"></textarea><small class="help-block form-text">Please enter Adress</small>
                                <div class="invalid-feedback">
                                    {{$errors->first('address')}}
                                </div>
                            </div>
                            
                        </div>   
                            <div class="row form-group">
                                <div class="col col-md-3"><label class=" form-control-label">Type</label></div>
                                <div class="col col-md-9">
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input {{ old('type') == 'l'?'checked':'' }} required type="radio" id="l" name="type" value="l" class="custom-control-input">
                                        <label class="custom-control-label" for="l">Man</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input {{ old('type') == 'p'?'checked':'' }} required type="radio" id="p" name="type" value="p" class="custom-control-input">
                                        <label class="custom-control-label" for="p">Women</label>
                                    </div>
                                </div>
                            </div>  
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="foto" class="form-control-label">Foto</label></div>
                                <div class="col-12 col-md-9">
                                    <div class="custom-file">
                                        
                                        <input type="file" class="custom-file-input {{$errors->first('foto')? "is-invalid": ""}} " name="foto" id="foto" aria-describedby="inputGroupFileAddon01">
                                        <div class="invalid-feedback">
                                            {{$errors->first('foto')}}
                                        </div>
                                        <label class="custom-file-label" for="foto">Foto</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="harga" class=" form-control-label">Harga</label></div>
                                <div class="col-12 col-md-9"><input value="{{ old('harga') }}" type="number" id="harga" name="harga" placeholder="harga..." class="form-control {{ $errors->first('harga')?'is-invalid':'' }}"><small class="form-text text-muted">Input Harga Perbulan</small>
                                    <div class="invalid-feedback">
                                        {{$errors->first('harga')}}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="fasilitas" class=" form-control-label">Fasilitas</label></div>
                                <div class="col-12 col-md-9">
                                    <select name="fasilitas"  class="form-control {{ $errors->first('fasilitas')?'is-invalid':'' }}">
                                        <option value="">Silahkan Pilih</option>
                                        <option value="5">Lengkap</option>
                                        <option value="3">Cukup</option>
                                        <option value="2">Kurang</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        {{$errors->first('fasilitas')}}
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="ukuran" class=" form-control-label">Ukuran</label></div>
                                <div class="col-12 col-md-9"><input value="{{ old('ukuran') }}" type="text" id="ukuran" name="ukuran" placeholder="ukuran..." class="form-control {{ $errors->first('ukuran')?'is-invalid':'' }}"><small class="form-text text-muted">Input Ukuran luas kamar</small>
                                    <div class="invalid-feedback">
                                        {{$errors->first('ukuran')}}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3"><label for="jarak" class=" form-control-label">Jarak</label></div>
                                <div class="col-12 col-md-9"><input value="{{ old('jarak') }}" type="text" id="jarak" name="jarak" placeholder="jarak..." class="form-control {{ $errors->first('jarak')?'is-invalid':'' }}"><small class="form-text text-muted">Input Jarak ke universitas mulawarman</small>
                                    <div class="invalid-feedback">
                                        {{$errors->first('jarak')}}
                                    </div>
                                </div>
                                
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