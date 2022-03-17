@extends('layouts.base')

@section('content')

    <div class="header">
        <h1 class="header-title">
            Penyediaan Spesifikasi
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
                    <br>
                    <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Tajuk sebutharga</th>
                                <th>Tajuk Spesifikasi</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>

                        <tbody>
                                <tr>
                                    <td>{{$pst->pst_tajuk}}</td>
                                    <td>{{$spesifikasi->spesifikasi_tajuk}}</td>


                                    @if ($spesifikasi->status_spesifikasi=="menunggu semakan")
                                        <td><a href="/PenyediaanSpesifikasi/{{$spesifikasi->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a> </td>

                                    @elseif($spesifikasi->status_spesifikasi=="diluluskan")
                                        <td><a href="/JadualPemenuhan/{{$pst->id}}/create"><i class="align-middle fas fa-fw fa-pen"></i></a> </td>
                                    @endif
                                </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </[object Object]>

@stop
