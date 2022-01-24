@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kemaskini Maklumat Pengguna</a></li>
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

    <form action="/kemaskini-pengguna/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')

        <input hidden name="id" value="{{$user->id}}">

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Nama: </label>
            </div>
            <div class="mb-3 col-md-6">
                <input type="text" name="user_name" value="{{$user->user_name}}" class="form-control"> 
            </div>
        </div>

         <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6"> Jenis Pengguna</label>
            </div>
            <div class="mb-3 col-md-6">
          
                <select name="jenis" class="form-select">
                    <option @if ($user->jenis == 'pekerja') selected @endif value='pekerja'>Staff Perbadanan Labuan</option>
                    <option @if ($user->jenis == 'pembekal') selected @endif value='pembekal'>Pembekal</option>
                    <option @if ($user->jenis == 'juruaudit') selected @endif value='juruaudit'>JuruAudit</option>
                </select> 
            </div>
         </div>
    
        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">No Kad Pengenalan</label>
            </div>
            <div class="mb-3 col-md-6">
                 <input type="text" name="user_identity_no" value="{{$user->user_identity_no}}" class="form-control"> 
            </div>
        </div>
        
        
        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Emel</label>
            </div>
            <div class="mb-3 col-md-6">
                 <input type="email" name="email" value="{{$user->email}}" class="form-control"> 
            </div>
        </div>
        
        {{-- <br>Role <select name="role_id"> --}}
                {{-- <option hidden value="">SILA PILIH</option> --}}
                    {{-- @foreach($role as  $role)
                <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach 
                    </select> --}}
                  {{-- <ul>
                      <li>{{$role->role_name}}</li>
                  </ul>
                  @endforeach --}}

        <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Status Pengguna: </label>
            </div>
            <div class="mb-3 col-md-6">
                <select name="user_status" class="form-select">

                    <option @if ($user->user_status == 'aktif') selected @endif value='aktif'>Aktif</option>
                    <option @if ($user->user_status == 'tidak aktif') selected @endif value='tidak aktif'>Tidak Aktif</option>
                </select>
            </div>
        </div>

  {{-- <div class="row">
            <div class="mb-3 col-md-6">
               <label class="col-form-label col-sm-6">Peranan Pengguna</label>
            </div>
      
            <div class="mb-3 col-md-6">
               <ul>    
                @foreach ($user->roles() as $role)

                    <li>{{$role->role_name}} </li> 

                    <form method="POST" action="/Roles/{{$role->id}}">
                    @method('DELETE')
                    @csrf
                    <button type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
               </ul>
            </form>
                @endforeach
               </ul>
            </div>
        </div>    --}}
       <div class="row">
            <div class="col-md-6">
               <label class="col-form-label col-sm-6">Peranan Semasa</label>
            </div>
            <div class="mb-3 col-md-6">
                @foreach ($user->roles as $user_role)
                        <ul>
                            <li>{{$user_role->role_name}} </li>
                        </ul>
                @endforeach
            </div>
        </div>  

       
   <div class="row">
            <div class="col-md-6">
               <label class="col-form-label col-sm-6">Tambah Peranan</label>
            </div>
            <div class="mb-3 col-md-6">
                  <select name="role_id"  class="form-select">
                    <option hidden value="">Sila Pilih</option>
                        @foreach($role as  $role)
                    <option value="{{$role->id}}">{{$role->role_name}}</option>
                        @endforeach 
                 </select>
            </div>
        </div>  

        <br> 
        <a href="/Pengguna" >Kembali</button>
        <button type=submit class="btn btn-primary">Kemaskini</button>
        
        </form>
        
            </div>
        </div>
    </div>
</div>

@stop