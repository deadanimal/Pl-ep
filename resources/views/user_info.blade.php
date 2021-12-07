@extends('layouts.base')

@section('content')
    
Maklumat Pengguna



            <div class="row">
                <div class="col-md-4">
                    <label class="col-form-label col-sm-4 ">Nama: </label>
                </div>
                <div class="col-md-8"><input type="text" class="form-control" name="user_name" value="{{$user->user_name}}"></div>
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
                    <label class="col-form-label col-sm-6 ">Email</label>
                </div>
                <div class="mb-3 col-md-8">
                    <input type-=email  class="form-control" name=email value="{{$user->email}}">
                </div>
            </div>

                <div class="row">
                    <div class="col-md-4">
                        <label class="col-form-label col-sm-6 ">Roles</label>
                    </div>
                    <div class="mb-3 col-md-8">
  


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
            <a href=/Pengguna class="btn btn-primary" style=float:absolute>Kembali</a>
        </div>


@endsection





