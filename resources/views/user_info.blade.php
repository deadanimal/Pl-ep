@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Profil Saya</a></li>
        </ol>
    </nav>
</div>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0"></h5>
            </div>
            <div class="card-body">

            <div class="row">
                <div class="col-md-4">
                    <label class="col-form-label col-sm-4 ">Nama: </label>
                </div>
                <div class="mb-3 col-md-8"><input type="text" class="form-control" name="user_name" value="{{$user->user_name}}">
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                    <label class="col-form-label col-sm-6 ">Jenis Pengguna </label>
                </div>
                <div class="mb-3 col-md-8">
                    <input type="text" name="jenis"  class="form-control" value="{{$user->jenis}}">
                </div>
            </div>
         
            <div class="row">
                <div class="col-md-4">
                    <label class="col-form-label col-sm-6 "> No Kad Pengenalan </label>
                </div>
                <div class="mb-3 col-md-8">
                    <input type="text"  class="form-control" name="user_identity_no" value="{{$user->user_identity_no}}">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <label class="col-form-label col-sm-6 ">Emel</label>
                </div>
                <div class="mb-3 col-md-8">
                    <input type-=email  class="form-control" name=email value="{{$user->email}}">
                </div>
            </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="col-form-label col-sm-6 ">Peranan Pengguna</label>
                    </div>
                    <div class="col-md-8">
                        @foreach ($user->roles as $role)
                        <ul>
                            <li>{{$role->role_name}}</li>
                        </ul>
                        @endforeach
                    </div>
                 
                </div>
        

        <br>
        <div>
            <a href=/dashboard class="btn btn-success" style=float:absolute>Kembali</a>
        </div>


@endsection





