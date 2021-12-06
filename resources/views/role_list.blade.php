@extends('layouts.base')
@section('content')
    

<table id="datatables-1" class="table table-striped" style="width:100%">
    <thead>
        <tr>
        <th> Nama </th>
        <th> Jenis Pengguna </th>
        <th> No Kad Pengenalan</th>
        <th> </th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
            <tr>

                <td> {{$users->user_name}}</td> 
                <td> {{$users->jenis}}</td>
                <td> {{$users->user_identity_no}}</td>
                <td><a href="/Pengguna/{{$users->id}}/edit">Butiran</a> </td>
            </tr>
        @endforeach
    </tbody>  
</table>

@endsection
