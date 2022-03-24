@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
        Pembelian Sebut Harga/Tender
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Kehadiran Taklimat</a></li>
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
                                <td>Tajuk SebutHarga</td>
                                <td>Tarikh Taklimat</td>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{$pst->pst_tajuk}}</td>
                                <td>{{date('d-m-Y',strtotime($iklan->iklan_taklimat_date))}}</td>
                                <td> @if ($kehadiran->status==='menunggu kelulusan')
                                    <span class="badge rounded-pill bg-primary">Dalam Semakan</span>
                               @elseif ($kehadiran->status === 'draf')
                                    <span class="badge rounded-pill bg-secondary">Draf</span>
                               @elseif ($kehadiran->status === 'ditolak')
                                   <span class="badge rounded-pill bg-danger">Ditolak</span>
                                @else
                                   <span class="badge rounded-pill bg-success">Diluluskan</span>
                               @endif
                           </td>


                               @if ($kehadiran->status =="diluluskan")
                                    <td><a href="/Cadangan/{{$spesifikasi->id}}/create"><i class="align-middle fas fa-fw fa-pen"></i></a>

                           @else
                               <td><a href="#"><i class="align-middle fas fa-fw fa-pen"></i></a>

                           @endif


                            </tr>




                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
@stop
