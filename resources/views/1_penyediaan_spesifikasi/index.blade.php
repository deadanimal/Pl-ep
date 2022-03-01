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
                    <button class="btn btn-success" onclick="window.location.href='/PenyediaanSpesifikasi/create'">+Tambah</a></button>
                </div>
                <br>
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
                                    <td>{{$PenyediaanSpesifikasi->spesifikasi_tajuk}}</td>
                                    <td>{{$PenyediaanSpesifikasi->spesifikasi_jenis_barang}}</td>
                                    <td>{{$PenyediaanSpesifikasi->spesifikasi_status}}</td>
                                    <td class="table-action">
                                      @if ($PenyediaanSpesifikasi->spesifikasi_status=="menunggu semakan")
                                            @if(Auth::user()->id==$urusetia)
                                            <form method="POST" action="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id}}">
                                                @method('DELETE')
                                                @csrf
                                            <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            <a href="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id }}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                            </form>

                                            @elseif(Auth::user()->id==$pengerusi)
                                            <form method="POST" action="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id}}">
                                                @method('DELETE')
                                                @csrf
                                            <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                            <a href="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id }}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                            </form>

                                            

                                            @endif
                                        @elseif ($PenyediaanSpesifikasi->spesifikasi_status=="menunggu kelulusan spesifikasi")
                                        <a href="/PenyediaanSpesifikasi/{{$PenyediaanSpesifikasi->id }}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>

                                        @elseif ($PenyediaanSpesifikasi->spesifikasi_status=="diluluskan")
                                        <a href="/PembelianSebutTender/{{$PenyediaanSpesifikasi->id }}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach 
                        </tbody>
                    </table>
                </div>
             </div>
        </div>
    </div>

@stop




                