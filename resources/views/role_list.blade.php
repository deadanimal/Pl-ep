@extends('layouts.base')
@section('content')
<div class="header">
    <h1 class="header-title">
    Pengguna
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
 Senarai Pengguna Berdaftar</a></li>
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
                <div align="right"> 
                    <button class="btn btn-success" onclick="window.location.href='/Pengguna/create'">+Tambah</a></button>
                </div>
                <br>
    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
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
                    <form method="POST" action="/Pengguna/{{$users->id}}">
                        @method('DELETE')
                        @csrf
                    <button class="btn" type="submit" onclick="executeExample('warningConfirm')" id="padam"><i class="align-middle fas fa-fw fa-trash"></i></button>
                    <a href="/kemaskini-maklumat/{{$users->id}}"><i class="align-middle fas fa-fw fa-pen"></i></a>
               
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>  
</table>
            </div>
        </div>
    </div>
</div>
</div>

    <script>
            Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
        if (result.isConfirmed) {
            Swal.fire(
            'Deleted!',
            'Your file has been deleted.',
            'success'
            )
        }
        })
        </script>


@stop
