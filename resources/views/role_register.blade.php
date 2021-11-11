@extends('layouts.base')

@section('content')
    
<h3>Pendaftaran Pengguna</h3>
</div>
    <div class="card-body">
        <form action="/daftar-role" method="POST">
            @csrf

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Nama: </label>
                </div>
                <div class="mb-3 col-md-6"><input type="text" class="form-control" name="user_name"></div>
            </div>


            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Jenis Pengguna </label>
                </div>
                <div class="mb-3 col-md-6">
                    <select name="jenis"  class="form-control">
                        <option hidden>Sila Pilih</option>
                        <option value="pekerja">Staff Perbadanan Labuan</option>
                        <option value="pembekal">Pembekal</option>
                        <option value="juruaudit">Juruaudit</option>
                    </select>
                </div>
            </div>
         
            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 "> MyKad Number </label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type="text"  class="form-control" name="user_identity_no">
                </div>
            </div>

            <div class="row">
                <div class="mb-3 col-md-6">
                    <label class="col-form-label col-sm-6 ">Email</label>
                </div>
                <div class="mb-3 col-md-6">
                    <input type-=email  class="form-control" name=email>
                </div>
            </div>

                <div class="row">
                    <div class="mb-3 col-md-6">
                        <label class="col-form-label col-sm-6 ">Roles</label>
                    </div>
                    <div class="mb-3 col-md-6">
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

@endsection





