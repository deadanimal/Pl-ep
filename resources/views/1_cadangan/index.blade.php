@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
   Cadangan
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Cadangan</a></li>
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
                            <td>Tajuk Spesifikasi</td>
                            <th>Status Mesyuarat</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td>{{$pst->pst_tajuk}}</td>
                            <td>{{$spesifikasi->spesifikasi_tajuk}}</td>
                            <td> @if ($cadangan->cadangan_mesyuarat_status==null)
                                        fjfjjf
                                 @elseif ($cadangan->cadangan_mesyuarat_status=='dalam semakan')
                                    <span class="badge rounded-pill bg-primary">Dalam Semakan</span>

                                @elseif ($cadangan->cadangan_mesyuarat_status=='menunggu kelulusan')
                                    <span class="badge rounded-pill bg-success">Pengesahan</span>

                                @else
                                    <span class="badge rounded-pill bg-success">Diluluskan</span>
                                @endif
                       </td>

                            @if($cadangan->cadangan_mesyuarat_status=="dalam semakan")

                                @if(Auth::user()->id==$jawatankuasa->jawatankuasa_penilaian_ajk)
                                    <td><a href="/Cadangan/{{$cadangan->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                @else
                                    <td><a href="#"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                @endif

                            @elseif($cadangan->cadangan_mesyuarat_status==null)
                                <td><a href="/Cadangan/create"><i class="align-middle fas fa-fw fa-pen"></i></a>

                            @elseif($cadangan->cadangan_mesyuarat_status=="menunggu kelulusan")
                                <td><a href="/Cadangan/{{$cadangan->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>

                            @endif
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>






@stop
