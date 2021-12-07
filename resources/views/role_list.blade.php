@extends('layouts.base')
@section('content')
    

<table id="datatables-1" class="table table-striped" style="width:100%">
    <thead>
        <tr>
        <th> Nama </th>
        <th> Jenis Pengguna </th>
        <th>Status Pengguna</th>
        <th>Tindakan</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $users)
            <tr>

                <td> {{$users->user_name}}</td> 
                <td> {{$users->jenis}}</td>
                <td> {{$users->user_status}}</td>
                <td class="table-action">
                    <a href="/Pengguna/{{$users->id}}">Papar</a>
                    <a href="/Pengguna/{{$users->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                    <a href="/Pengguna/{{$users->id}}"><i class="align-middle fas fa-fw fa-trash"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>  
</table>

@endsection
