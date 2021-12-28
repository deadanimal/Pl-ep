@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
        Spesifikasi Item
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Senarai Spesifikasi Item</a></li>
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
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tajuk</th>
                                <th>Jenis Barang</th>
                                <th>Status</th>
                                <th></th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($PenyediaanSpesifikasi as $PenyediaanSpesifikasi)
                                <tr>
                                    <td>{{  $PenyediaanSpesifikasi->spesifikasi_tajuk_template}}</td>
                                    <td>{{  $PenyediaanSpesifikasi->spesifikasi_jenis}}</td>
                                    <td>{{  $PenyediaanSpesifikasi->spesifikasi_status}}</td>
                                    <td class="table-action">
                                        <form method="POST" action="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id}}">
                                            @method('DELETE')
                                            @csrf
                                        <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                        <a href="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id }}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                    </tr>
                             @endforeach 
                        </tbody>
                    </table>
                </div>
             </div>
        </div>
    </div>

@stop




                