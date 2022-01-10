@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Nota Minta</a></li>
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
                    <button class="btn-success" onclick="window.location.href='/NotaMinta/create'">+Tambah</a></button>
                </div>
                <br>
                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th> Kaedah Pembelian </th>
                            <th> Jenis Perolehan </th>
                            <th> Tempoh Penghantaran</th>
                            <th> Status </th>
                            <th> Disediakan Oleh</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($fizaNotaMinta as $fizaNotaMinta)
                            <td>{{$fizaNotaMinta->ro_kaedah}}</td>
                            <td>{{$fizaNotaMinta->ro_jenis_perolehan}}</td>
                            <td>{{$fizaNotaMinta->ro_tempoh_penghantaran}}</td>
                            <td>{{$fizaNotaMinta->ro_status}}</td>
                            <td>{{$fizaNotaMinta->ro_created_by}}</td>
                        </tr>
                             @endforeach
                       
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@stop