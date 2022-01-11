@extends('layouts.base')

@section('content')





<div class="header">
    <h1 class="header-title">
    Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Pendaftaran Pengguna Baharu</a></li>
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
        <form action="/Pengguna" method="POST">
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
                   <label for="jenis_pengguna" class="col-form-label col-sm-6">Jenis Pengguna </label>
                </div>
                <div class="mb-3 col-md-8">
                    <select name="jenis"  class="form-control" id="jenis_pengguna">
                        <option hidden>Sila Pilih</option>
                        <option value="pekerja">Staff Perbadanan Labuan</option>
                        <option value="pembekal" id="pembekal">Pembekal</option>
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
                    <input type-="email"  class="form-control" name="email">
                </div>
            </div>

                <div class="row">
                    <div class="col-md-4">
                       <label class="col-form-label col-sm-6">Peranan Pengguna</label>
                    </div>
                    <div class="mb-3 col-md-8">
                         <select name="role_id"  class="form-control">
                            <option hidden value="">Sila Pilih</option>
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
                                <option value="Staff Pembekal">Staff Pembekal</option> 
                        </select>--}}
                    </div>
                </div>
                  
                <div class="row" id="pembekal_id_div">
                    <div class="col-md-4">
                       <label class="col-form-label col-sm-6">Syarikat Pembekal</label>
                    </div>
                    <div class="mb-3 col-md-8">
                         <select class="form-control" name="pembekal_id" id="pembekal_id">
                             <option hidden>Sila Pilih</option>
                             @foreach ($pembekal as $pembekal)
                             <option value="{{$pembekal->id}}">{{$pembekal->pembekal_company_name}}</option>
                             @endforeach
                         </select>
                  </div>
                </div>
        

        <br>
        <div>
            <button type="submit" class="btn btn-primary" style="float:absolute">Daftar</button>
        </div>
    </form>
    </div>
        </div>
    </div>
</div>

<script>
    $("#jenis_pengguna").change(function() {
        if ($(this).val() == "pembekal") {
          $('#pembekal_id_div').show();
          $('#pembekal_id').attr('required', '');
          $('#pembekal_id').attr('data-error', 'This field is required.');
        } else {
          $('#pembekal_id_div').hide();
          $('#pembekal_id').removeAttr('required');
          $('#pembekal_id').removeAttr('data-error');
        }
      });
    
      $("#jenis_pengguna").trigger("change");
    </script>
    

@stop





