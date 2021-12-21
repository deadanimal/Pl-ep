@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
    Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"> Pendaftaran Pengguna Baharu</a></li>
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
        <form action="/daftar-role" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <label class="col-form-label col-sm-4 ">Nama: </label>
                </div>
                <div class="mb-3 col-md-8">
                    <input type="text" class="form-control" name="user_name">
                </div>
            </div>


            <div class="row">
                <div class="col-md-4">
                   <label class="col-form-label col-sm-6">Jenis Pengguna </label>
                </div>
                <div class="mb-3 col-md-8">
                    <select name="jenis"  class="form-control">
                        <option hidden>Sila Pilih</option>
                        <option value="pekerja">Staff Perbadanan Labuan</option>
                        <option value="pembekal">Pembekal</option>
                        <option value="juruaudit">Juruaudit</option>
                    </select>
                </div>
            </div>
         
            <div class="row">
                <div class="col-md-4">
                   <label class="col-form-label col-sm-6"> No Kad Pengenalan </label>
                </div>
                <div class="mb-3 col-md-8">
                    <input type="text"  class="form-control" name="user_identity_no">
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                   <label class="col-form-label col-sm-6">Emel</label>
                </div>
                <div class="mb-3 col-md-8">
                    <input type-=email  class="form-control" name=email>
                </div>
            </div>

                <div class="row">
                    <div class="col-md-4">
                       <label class="col-form-label col-sm-6">Peranan Pengguna</label>
                    </div>
                    <div class="mb-3 col-md-8">
                         <select name="role_id"  class="form-control">
                            <option hidden>Sila Pilih</option>
                                @foreach($role as  $role)
                            <option value="{{$role->id}}">{{$role->role_name}}</option>
                                @endforeach 
                         </select>


                        {{-- <select name="role_id" class="form-control">
                                <option hidden>Sila Pilih<option>
                                <option value="Pegawai Perancangan">Pegawai Perancangan</option>
                                <option value="Pegawai Pengesah">Pegawai Pengesah</option>
                                <option value="Pegawai Pelulus">Pegawai Pelulus</option>
                                <option value="JuruAudit">Juru Audit</option>
                                <option value="Staff Pembekal">Staff Pembekal</option> --}}
                        </select>
                    </div>
                </div>
        

        <br>
        <div>
            <button type=submit class="btn btn-primary" style=float:absolute>Daftar</button>
        </div>
    </form>
    </div>
        </div>
    </div>
</div>
    

@stop





