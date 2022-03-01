@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
        Spesifikasi Item
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Spesifikasi Item</a></li>
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
                    <button class="btn btn-success" onclick="window.location.href='/KehadiranTaklimat/create'">+Tambah</a></button>
                </div>
                <br>
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <td>Nama SebutHarga</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pst as $pst)
                            <tr>
                                <td>{{$pst->pst_tajuk}}</td>
                                <td> <a href="/KehadiranTaklimat/{{$pst->id}}/create">Kemaskini</a></td>
                                <td><a href="/KehadiranTaklimat/{{$KehadiranTaklimat->id}}/edit">Kemaskini Kehadiran</a></td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@stop
                                