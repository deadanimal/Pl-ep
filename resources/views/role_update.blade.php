@extends('layouts.base')

@section('content')

        Nama: {{$user->user_name}}
        <br> Jenis Pengguna :{{$user->jenis}}
        <br> Email {{$user->email}}

      {{$user->roles}}

    <form action="/Pengguna/{{$user->id}}" method="POST">
        @csrf
        @method('PUT')

        <input hidden name="id" value="{{$user->id}}">

         <br>Nama: <input type="text" name="user_name" value="{{$user->user_name}}" class="form-control"> 
         <br> Jenis Pengguna
        <select name="jenis">
            <option @if ($user->jenis == 'pekerja') selected @endif value='pekerja'>Staff Perbadanan Labuan</option>
            <option @if ($user->jenis == 'pembekal') selected @endif value='pembekal'>Pembekal</option>
            <option @if ($user->jenis == 'juruaudit') selected @endif value='juruaudit'>JuruAudit</option>
            </select> 
            
        
        <br>No Kad Pengenalan<input type="text" name="user_identity_no" value="{{$user->user_identity_no}}"> 
        
        <br>Email<input type="email" name="email" value="{{$user->email}}"> 
        
        {{-- <br>Role <select name="role_id"> --}}
                {{-- <option hidden>SILA PILIH</option> --}}
                    {{-- @foreach($role as  $role)
                <option value="{{$role->id}}">{{$role->role_name}}</option>
                    @endforeach 
                    </select> --}}


        <br>Status Pengguna: 
        <select name="user_status" class="form-control">
            <option @if ($user->jenis == 'aktif') selected @endif value="aktif">Aktif</option>
            <option @if ($user->jenis == 'tidak aktif') selected @endif value="tidak aktif">Tidak Aktif</option>
        </select>
        

        <br> 
        <button class="btn-success" >Kembali</button>

        <button type=submit class="btn-primary">Kemaskini</button>
        
        </form>

        

        {{-- {{$user->roles()}} --}}

@stop