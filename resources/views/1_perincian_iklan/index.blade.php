@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Sebutharga / Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Perincian Pengiklanan</a></li>
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
                    <button class="btn btn-success" onclick="window.location.href='/PembelianSebutTender/create'">+Tambah</a></button>
                </div>
                <br>

                <table id="datatables-reponsive" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tajuk Sebutharga </th>
                            <th>Status Perincian Iklan</th>
                            <th> Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$pst->pst_tajuk}}</td>
                            <td> @if ($iklan->iklan_status==='menunggu kelulusan')
                                <span class="badge rounded-pill bg-primary">Proses aSemakan</span>
                           @elseif ($iklan->iklan_status === 'draf')
                                <span class="badge rounded-pill bg-secondary">Draf</span>
                           @elseif ($iklan->iklan_status === 'ditolak')
                               <span class="badge rounded-pill bg-danger">Ditolak</span>
                            @else
                               <span class="badge rounded-pill bg-success">Diluluskan</span>
                           @endif
                       </td>
                            @if($iklan->iklan_status=="diluluskan")

                            <td>
                                <a href="/PerincianPengiklanan/{{$iklan->id}}"><i class="align-middle fas fa-fw fa-pen"></i></a></td>
                            @else
                            <td>
                                <a href="/PerincianIklan/{{$pst->id}}/create"><i class="align-middle fas fa-fw fa-pen"></i></a></td>
                        </tr>

                        @endif


                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
@stop
