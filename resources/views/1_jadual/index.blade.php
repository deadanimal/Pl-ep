@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
      Jadual Pemenuhan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Jadual Pemenuhan</a></li>
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
                                <th>Tajuk Sebutharga</th>
                                <th>Tajuk Spesifikasi</th>
                                <th>Status Jadual</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{$pst->pst_tajuk}}</td>
                                <td>{{$spesifikasi->spesifikasi_tajuk}}</td>
                                <td> @if ($jadual->jadual_status==='menunggu kelulusan')
                                    <span class="badge rounded-pill bg-primary">Dalam Semakan</span>
                               @elseif ($jadual->jadual_status === 'ditolak')
                                   <span class="badge rounded-pill bg-danger">Ditolak</span>
                                @else
                                   <span class="badge rounded-pill bg-success">Diluluskan</span>
                               @endif
                           </td>
                                @if ($jadual->jadual_status=='menunggu kelulusan')
                                <td><a href="/JadualPemenuhan/{{$jadual->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a></td>

                                @elseif ($jadual->jadual_status=='diluluskan')
                                <td><a href="/PerincianIklan/{{$pst->id}}/create"><i class="align-middle fas fa-fw fa-pen"></i></a></td>

                                @endif
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@stop

