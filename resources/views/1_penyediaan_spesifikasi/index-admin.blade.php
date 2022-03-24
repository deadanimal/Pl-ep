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
                                <th>Status Spesifikasi</th>
                                <th>Tindakan</th>
                            </tr>
                        </thead>

                        <tbody>
                            {{-- @foreach ($spesifikasi as $spesifikasi) --}}
                            <tr>
                                <td>{{$spesifikasi->pst_tajuk}}</td>
                                <td>{{$spesifikasi->spesifikasi_tajuk}}</td>
                                <td>@if ($spesifikasi->spesifikasi_status==='menunggu kelulusan')
                                    <span class="badge rounded-pill bg-primary">Dalam Semakan</span>
                               @elseif ($spesifikasi->spesifikasi_status === 'draf')
                                    <span class="badge rounded-pill bg-secondary">Draf</span>
                               @elseif ($spesifikasi->spesifikasi_status === 'ditolak')
                                   <span class="badge rounded-pill bg-danger">Ditolak</span>
                                @else
                                   <span class="badge rounded-pill bg-success">Diluluskan</span>
                               @endif
                           </td>
                                @if ($spesifikasi->spesifikasi_status=="menunggu semakan")
                                <td><a href="/PenyediaanSpesifikasi/{{$spesifikasi->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a></td>

                                @elseif($spesifikasi->spesifikasi_status=="diluluskan")
                                <td><a href="/PenyediaanSpesifikasi/{{$spesifikasi->id}}"><i class="align-middle fas fa-fw fa-pen"></i></a></td>
                                 @endif

                            </tr>

                            {{-- @endforeach --}}


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </[object Object]>

@stop
