@extends('layouts.base')

@section('content')

<div class="header">
    <h1 class="header-title">
  Pembelian
    </h1>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">
Senarai Sebutharga / Tender</a></li>
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
                            <th>Zon </th>
                            <th>Tarikh Hantar</th>
                            <th>Status</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <td> {{$PembelianSebutTender->pst_tajuk}}</td>
                            <td> {{$PembelianSebutTender->pst_zon_lokasi}}</td>
                            <td> {{date('d-m-Y H:i', strtotime($PembelianSebutTender->created_at))}}</td>
                            <td>@if ($PembelianSebutTender->pst_status==='menunggu kelulusan')
                                     <span class="badge rounded-pill bg-primary">Dalam Semakan</span>
                                @elseif ($PembelianSebutTender->pst_status === 'draf')
                                     <span class="badge rounded-pill bg-secondary">Draf</span>
                                @elseif ($PembelianSebutTender->pst_status === 'ditolak')
                                    <span class="badge rounded-pill bg-danger">Ditolak</span>
                                 @else
                                    <span class="badge rounded-pill bg-success">Diluluskan</span>
                                @endif
                            </td>
                            <td class="table-action">


                                @if($PembelianSebutTender->pst_status=='draf')

                                <form method="POST" action="/PembelianSebutTender/{{$PembelianSebutTender->id}}">
                                    @method('DELETE')
                                    @csrf
                                <button class="btn" type="submit"><i class="align-middle fas fa-fw fa-trash"></i></button>
                                <a href="/PembelianSebutTender/{{$PembelianSebutTender->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                </form>



                                @elseif ($PembelianSebutTender->pst_status === 'menunggu kelulusan')
                                    @if (Auth::user()->id==$PembelianSebutTender->pst_pelulus)
                                        <a href="/PembelianSebutTender/{{$PembelianSebutTender->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a>
                                        @else
                                            <button class="btn" disabled><i class="align-middle fas fa-fw fa-pen"></i></a>
                                        @endif

                                @elseif ($PembelianSebutTender->pst_status ==='diluluskan')

                                    @if(Auth::user()->id==$jawatankuasa->jawatankuasa_spesifikasi_urusetia)
                                        <a href="/PenyediaanSpesifikasi/{{$PembelianSebutTender->id}}/create"><i class="align-middle fas fa-fw fa-pen"></i></button>

                                    @elseif(Auth::user()->id==$jawatankuasa->jawatankuasa_spesifikasi_ajk)
                                        <a href="/PenyediaanSpesifikasi/{{$spesifikasi->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></button>

                                    @elseif(Auth::user()->id==$jawatankuasa->jawatankuasa_spesifikasi_pengerusi)
                                    <a href="/PenyediaanSpesifikasi/{{$spesifikasi->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></button>
                                    @endif

                                @elseif($spesifikasi->status_spesifikasi=="diluluskan")
                                    @if(Auth::user()->id==$jawatankuasa->jawatankuasa_spesifikasi_urusetia)
                                        <td><a href="/JadualPemenuhan/{{$pst->id}}/create"><i class="align-middle fas fa-fw fa-pen"></i></a> </td>
                                     @elseif(Auth::user()->id==$pst->pelulus)
                                         <td><a href="/JadualPemenuhan/{{$pst->id}}/edit"><i class="align-middle fas fa-fw fa-pen"></i></a> </td>
                                    @else
                                        <td><a href="#"><i class="align-middle fas fa-fw fa-pen"></i></a> </td>
                                    @endif
                                @endif

                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@stop

